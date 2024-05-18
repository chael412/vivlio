const sample = () => {
	return (
		<div>
			<nav className='bg-gray-100 dark:bg-gray-700 fixed top-0 left-0 right-0 z-50'>
				<div className='flex flex-wrap justify-between items-center max-w-screen-xl px-4 py-1 mx-auto'>
					<div className='flex items-center'>
						<ul className='flex flex-row font-semibold mt-0 space-x-4 rtl:space-x-reverse text-md'>
							<li className='px-2 border-x-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline'
									aria-current='page'>
									Home
								</a>
							</li>
							<li className='pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline'>
									Book
								</a>
							</li>
							<li className='pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline'>
									Service
								</a>
							</li>
							<li className='pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline'>
									About
								</a>
							</li>
						</ul>
					</div>
					<div>
						<button
							id='dropdownHoverButton'
							data-dropdown-toggle='dropdownHover'
							data-dropdown-trigger='hover'
							className='border border-green-400 text-gray-900 bg-white hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-3 py-2 text-center inline-flex items-center dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-600'
							type='button'>
							Login
							<svg
								className='w-2.5 h-2.5 ms-3'
								aria-hidden='true'
								xmlns='http://www.w3.org/2000/svg'
								fill='none'
								viewBox='0 0 10 6'>
								<path
									stroke='currentColor'
									strokeLinecap='round'
									strokeLinejoin='round'
									strokeWidth='2'
									d='m1 1 4 4 4-4'
								/>
							</svg>
						</button>

						<div
							id='dropdownHover'
							className='z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700'>
							<ul
								className='py-2 text-sm text-gray-700 dark:text-gray-200'
								aria-labelledby='dropdownHoverButton'>
								<li>
									<a
										href='#'
										className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
										Admin
									</a>
								</li>
								<li>
									<a
										href='#'
										className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
										User Attendance
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	);
};

export default sample;
