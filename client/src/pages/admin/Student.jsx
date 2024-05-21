import 'flowbite';
import axios from 'axios';
import { AiFillHome } from 'react-icons/ai';

import Modal from '../../components/Modal';

import { useQuery, QueryClient, QueryClientProvider } from '@tanstack/react-query';
import { useDataStore } from '../../context/DataStoreContext';
import { useState } from 'react';
import { useNavigate } from 'react-router-dom';

const queryClient = new QueryClient();

const Student = () => {
	const navigate = useNavigate();

	const { setIsModal } = useDataStore();
	const [action, setAction] = useState('');

	const fetchStudents = async () => {
		const token = localStorage.getItem('token');

		if (!token) {
			console.error('No token found. Please login first.');
			navigate('/login');
			return;
		}

		try {
			const { data } = await axios.get('http://127.0.0.1:8000/api/students', {
				headers: {
					Authorization: `Bearer ${token}`,
				},
			});
			return data.students;
		} catch (error) {
			console.error('Error fetching students:', error);
		}
	};

	const { data: students, isLoading } = useQuery({
		queryKey: ['students'],
		queryFn: fetchStudents,
	});

	return (
		<div>
			<div className='flex justify-center items-center'>
				<Modal action={action} />
			</div>

			<section className='px-5 sm:px-5  lg:px-24 mt-3'>
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

			<section className='bg-gray-50 dark:bg-gray-900 p-3 sm:p-5'>
				<div className='mx-auto max-w-screen-xl px-4 lg:px-16'>
					<div className='bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden'>
						<div className='flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4'>
							<div className='w-full md:w-1/2'>
								<form className='flex items-center'>
									<label
										htmlFor='simple-search'
										className='sr-only'>
										Search
									</label>
									<div className='relative w-full'>
										<div className='absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none'>
											<svg
												aria-hidden='true'
												className='w-5 h-5 text-gray-500 dark:text-gray-400'
												fill='currentColor'
												viewBox='0 0 20 20'
												xmlns='http://www.w3.org/2000/svg'>
												<path
													fillRule='evenodd'
													d='M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z'
													clipRule='evenodd'
												/>
											</svg>
										</div>
										<input
											type='text'
											id='simple-search'
											className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
											placeholder='Search'
											required=''
										/>
									</div>
								</form>
							</div>
							<div className='w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0'>
								<button
									onClick={() => {
										setAction('add');
										setIsModal(true);
									}}
									type='button'
									className='flex items-center justify-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800'>
									<svg
										className='h-3.5 w-3.5 mr-2'
										fill='currentColor'
										viewBox='0 0 20 20'
										xmlns='http://www.w3.org/2000/svg'
										aria-hidden='true'>
										<path
											clipRule='evenodd'
											fillRule='evenodd'
											d='M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z'
										/>
									</svg>
									Add product
								</button>
								<div className='flex items-center space-x-3 w-full md:w-auto'>
									<button
										id='filterDropdownButton'
										data-dropdown-toggle='filterDropdown'
										className='w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700'
										type='button'>
										<svg
											xmlns='http://www.w3.org/2000/svg'
											aria-hidden='true'
											className='h-4 w-4 mr-2 text-gray-400'
											viewBox='0 0 20 20'
											fill='currentColor'>
											<path
												fillRule='evenodd'
												d='M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z'
												clipRule='evenodd'
											/>
										</svg>
										Filter
										<svg
											className='-mr-1 ml-1.5 w-5 h-5'
											fill='currentColor'
											viewBox='0 0 20 20'
											xmlns='http://www.w3.org/2000/svg'
											aria-hidden='true'>
											<path
												clipRule='evenodd'
												fillRule='evenodd'
												d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z'
											/>
										</svg>
									</button>
									<div
										id='filterDropdown'
										className='z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700'>
										<h6 className='mb-3 text-sm font-medium text-gray-900 dark:text-white'>Choose brand</h6>
										<ul
											className='space-y-2 text-sm'
											aria-labelledby='filterDropdownButton'>
											<li className='flex items-center'>
												<input
													id='apple'
													type='checkbox'
													value=''
													className='w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500'
												/>
												<label
													htmlFor='apple'
													className='ml-2 text-sm font-medium text-gray-900 dark:text-gray-100'>
													Apple (56)
												</label>
											</li>
											<li className='flex items-center'>
												<input
													id='fitbit'
													type='checkbox'
													value=''
													className='w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500'
												/>
												<label
													htmlFor='fitbit'
													className='ml-2 text-sm font-medium text-gray-900 dark:text-gray-100'>
													Microsoft (16)
												</label>
											</li>
											<li className='flex items-center'>
												<input
													id='razor'
													type='checkbox'
													value=''
													className='w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500'
												/>
												<label
													htmlFor='razor'
													className='ml-2 text-sm font-medium text-gray-900 dark:text-gray-100'>
													Razor (49)
												</label>
											</li>
											<li className='flex items-center'>
												<input
													id='nikon'
													type='checkbox'
													value=''
													className='w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500'
												/>
												<label
													htmlFor='nikon'
													className='ml-2 text-sm font-medium text-gray-900 dark:text-gray-100'>
													Nikon (12)
												</label>
											</li>
											<li className='flex items-center'>
												<input
													id='benq'
													type='checkbox'
													value=''
													className='w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500'
												/>
												<label
													htmlFor='benq'
													className='ml-2 text-sm font-medium text-gray-900 dark:text-gray-100'>
													BenQ (74)
												</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div className='overflow-x-auto'>
							<table className='w-full text-sm text-left text-gray-500 dark:text-gray-400'>
								<thead className='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
									<tr>
										<th
											scope='col'
											className='px-4 py-3'>
											#
										</th>
										<th
											scope='col'
											className='px-4 py-3'>
											Student No.
										</th>
										<th
											scope='col'
											className='px-4 py-3'>
											Name
										</th>
										<th
											scope='col'
											className='px-4 py-3'>
											Gender
										</th>
										<th
											scope='col'
											className='px-4 py-3'>
											Course
										</th>

										<th
											scope='col'
											className='px-4 py-3'>
											<span className='sr-only'>Actions</span>
										</th>
									</tr>
								</thead>
								<tbody>
									{isLoading ? (
										<>
											{Array.from({ length: 5 }).map((_, index) => (
												<tr
													key={index}
													className='animate-pulse'>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
													<td className='px-6 py-4'>
														<div className='h-4 bg-gray-200 rounded'></div>
													</td>
												</tr>
											))}
										</>
									) : (
										students &&
										students
											.slice() // Create a shallow copy of the array to avoid mutating the original array
											.map((student, index) => (
												<tr
													key={student.id}
													className='border-b dark:border-gray-700 hover:bg-gray-100'>
													<td className='px-4 py-3'>{index + 1}</td>
													<td className='px-4 py-3'>{student.student_no}</td>
													<td className='px-4 py-3'>{`${student.user.firstname} ${student.user.middlename} ${student.user.lastname}`}</td>
													<td className='px-4 py-3'>{student.user.gender}</td>
													<td className='px-4 py-3'>{student.course.course_name}</td>
													<td className='px-4 py-3 flex items-center justify-end'>
														<a
															onClick={() => {
																setAction('view');
																setIsModal(true);
															}}
															className='mx-2 font-medium text-blue-600 hover:underline hover:font-semibold'>
															View
														</a>
														<a
															onClick={() => {
																setAction('edit');
																setIsModal(true);
															}}
															className='mx-2 font-medium text-blue-600 hover:underline hover:font-semibold'>
															Edit
														</a>
														<a
															onClick={() => {
																setAction('delete');
																setIsModal(true);
															}}
															className='mx-1 font-medium text-red-600 hover:underline hover:font-semibold'>
															Delete
														</a>
													</td>
												</tr>
											))
									)}
								</tbody>
							</table>
						</div>
						<nav
							className='flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4'
							aria-label='Table navigation'>
							<span className='text-sm font-normal text-gray-500 dark:text-gray-400'>
								Showing
								<span className='font-semibold text-gray-900 dark:text-white'>1-10</span>
								<span className='mx-1'>of</span>
								<span className='font-semibold text-gray-900 dark:text-white'>1000</span>
							</span>
							<ul className='inline-flex items-stretch -space-x-px'>
								<li>
									<a
										href='#'
										className='flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										<span className='sr-only'>Previous</span>
										<svg
											className='w-5 h-5'
											aria-hidden='true'
											fill='currentColor'
											viewBox='0 0 20 20'
											xmlns='http://www.w3.org/2000/svg'>
											<path
												fillRule='evenodd'
												d='M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z'
												clipRule='evenodd'
											/>
										</svg>
									</a>
								</li>
								<li>
									<a
										href='#'
										className='flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										1
									</a>
								</li>
								<li>
									<a
										href='#'
										className='flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										2
									</a>
								</li>
								<li>
									<a
										href='#'
										aria-current='page'
										className='flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white'>
										3
									</a>
								</li>
								<li>
									<a
										href='#'
										className='flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										...
									</a>
								</li>
								<li>
									<a
										href='#'
										className='flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										100
									</a>
								</li>
								<li>
									<a
										href='#'
										className='flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>
										<span className='sr-only'>Next</span>
										<svg
											className='w-5 h-5'
											aria-hidden='true'
											fill='currentColor'
											viewBox='0 0 20 20'
											xmlns='http://www.w3.org/2000/svg'>
											<path
												fillRule='evenodd'
												d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z'
												clipRule='evenodd'
											/>
										</svg>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</section>
		</div>
	);
};

const App = () => (
	<QueryClientProvider client={queryClient}>
		<Student />
	</QueryClientProvider>
);

export default App;
