import Navbar from '../../components/admin/Navbar';
import Banner from '../../components/admin/Banner';
import { AiFillHome } from 'react-icons/ai';
import { useQuery, QueryClient, QueryClientProvider } from '@tanstack/react-query';
import axios from 'axios';

// Create a QueryClient
const queryClient = new QueryClient();

const fetchAdmins = async () => {
	const { data } = await axios.get('http://127.0.0.1:8000/api/admins');
	return data.admins;
};

const Admin = () => {
	// Use useQuery to fetch the admins data
	const { data: admins, isLoading } = useQuery({
		queryKey: ['admins'],
		queryFn: fetchAdmins,
	});

	return (
		<div>
			<Navbar />
			<Banner />
			<section className='px-5 sm:px-5 md:px-20 lg:px-32 mt-3'>
				<div className='bg-green-100 h-16 px-5 py-3 shadow-md flex items-center gap-2'>
					<div className='bg-[#27ae60] w-10 h-10 flex items-center justify-center rounded-md'>
						<AiFillHome className='text-white text-3xl' />
					</div>
					<div>
						<p>Dashboard</p>
						<p className='text-blue-600'>Summary</p>
					</div>
				</div>
			</section>

			<section className='px-5 sm:px-5 md:px-20 lg:px-32 mt-10'>
				<div className='relative overflow-x-auto shadow-md sm:rounded-lg '>
					<table className='px-20 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400'>
						<thead className='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>
							<tr>
								<th
									scope='col'
									className='p-4'>
									<div className='flex items-center'>
										<input
											id='checkbox-all-search'
											type='checkbox'
											className='w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600'
										/>
										<label
											htmlFor='checkbox-all-search'
											className='sr-only'>
											checkbox
										</label>
									</div>
								</th>
								<th
									scope='col'
									className='px-6 py-3'>
									Admin Name
								</th>
								<th
									scope='col'
									className='px-6 py-3'>
									Username
								</th>
								<th
									scope='col'
									className='px-6 py-3'>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							{isLoading ? (
								<>
									{[...Array(2)].map((_, index) => (
										<tr
											key={index}
											className='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
											{[...Array(4)].map((_, idx) => (
												<td
													key={idx}
													className='px-6 py-4'>
													<div
														role='status'
														className='max-w-sm animate-pulse'>
														<div className='max-w-[20px] h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4'></div>
													</div>
												</td>
											))}
										</tr>
									))}
								</>
							) : (
								admins.map((admin, index) => (
									<tr
										key={index}
										className='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
										<td>{index + 1}</td>
										<td className='px-6 py-4'>{`${admin.user.firstname} ${admin.user.middlename} ${admin.user.lastname}`}</td>
										<td className='px-6 py-4'>{admin.username}</td>
										<td className='px-6 py-4'>
											<a
												href='#'
												className='mx-2 font-medium text-blue-600 dark:text-blue-500 hover:underline'>
												Edit
											</a>
											<a
												href='#'
												className='font-medium text-blue-600 dark:text-blue-500 hover:underline'>
												Delete
											</a>
										</td>
									</tr>
								))
							)}
						</tbody>
					</table>
					<nav
						className='flex items-center flex-column flex-wrap md:flex-row justify-between pt-4'
						aria-label='Table navigation'>
						<span className='text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto'>
							Showing <span className='font-semibold text-gray-900 dark:text-white'>1-10</span> of <span className='font-semibold text-gray-900 dark:text-white'>1000</span>
						</span>
						<ul className='inline-flex -space-x-px rtl:space-x-reverse text-sm h-8'>
							<li>
								<a
									href='#'
									className='flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
									Previous
								</a>
							</li>
							{[1, 2, 3, 4, 5].map((page) => (
								<li key={page}>
									<a
										href='#'
										className={`flex items-center justify-center px-3 h-8 leading-tight ${
											page === 3
												? 'text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white'
												: 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'
										}`}>
										{page}
									</a>
								</li>
							))}
							<li>
								<a
									href='#'
									className='flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
									Next
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>
		</div>
	);
};

const App = () => (
	<QueryClientProvider client={queryClient}>
		<Admin />
	</QueryClientProvider>
);

export default App;
