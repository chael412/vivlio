import { BiBuildings } from 'react-icons/bi';
import { GiGraduateCap } from 'react-icons/gi';
import { FaBook } from 'react-icons/fa';
import { FaUsers } from 'react-icons/fa';
import { AiFillHome } from 'react-icons/ai';

import 'flowbite';
import Navbar from '../../components/admin/Navbar';
import Banner from '../../components/admin/Banner';

const Dasboard = () => {
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
			<div className='grid grid-cols-2 lg:grid-cols-4 gap-4 px-5 sm:px-5 md:px-20 lg:px-32 mt-5'>
				<div>
					<a
						href='#'
						className='flex items-center gap-5 max-w-sm px-3 py-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
						<FaUsers className='text-4xl text-teal-500' />
						<div>
							<h5 className='mb-2 text-xl font-semibold tracking-tight text-gray-700 dark:text-white'>Patrons</h5>
							<p className='font-normal text-gray-700 dark:text-gray-400'>199</p>
						</div>
					</a>
				</div>
				<div>
					<a
						href='#'
						className='flex items-center gap-5 max-w-sm px-3 py-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
						<FaBook className='text-4xl text-teal-500' />

						<div>
							<h5 className='mb-2 text-xl font-semibold tracking-tight text-gray-700 dark:text-white'>Books</h5>
							<p className='font-normal text-gray-700 dark:text-gray-400'>199</p>
						</div>
					</a>
				</div>
				<div>
					<a
						href='#'
						className='flex items-center gap-5 max-w-sm px-3 py-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
						<GiGraduateCap className='text-5xl text-teal-500' />

						<div>
							<h5 className='mb-2 text-xl font-semibold tracking-tight text-gray-700 dark:text-white'>Courses</h5>
							<p className='font-normal text-gray-700 dark:text-gray-400'>199</p>
						</div>
					</a>
				</div>
				<div>
					<a
						href='#'
						className='flex items-center gap-5 max-w-sm px-3 py-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
						<BiBuildings className='text-4xl text-teal-500' />

						<div>
							<h5 className='mb-2 text-xl font-semibold tracking-tight text-gray-700 dark:text-white'>Departments</h5>
							<p className='font-normal text-gray-700 dark:text-gray-400'>199</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	);
};

export default Dasboard;
