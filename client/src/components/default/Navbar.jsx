const Navbar = () => {
	return (
		<div>
			<nav className='bg-white border-gray-200 dark:bg-gray-900'>
				<div className='max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-5 py-1'>
					<button
						data-collapse-toggle='navbar-default'
						type='button'
						className='inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600'
						aria-controls='navbar-default'
						aria-expanded='false'>
						<span className='sr-only'> menu</span>
						<svg
							className='w-5 h-5'
							aria-hidden='true'
							xmlns='http://www.w3.org/2000/svg'
							fill='none'
							viewBox='0 0 17 14'>
							<path
								stroke='currentColor'
								strokeLinecap='round'
								strokeLinejoin='round'
								strokeWidth='2'
								d='M1 1h15M1 7h15M1 13h15'
							/>
						</svg>
					</button>
					<div
						className='hidden w-full md:block md:w-auto'
						id='navbar-default'>
						<ul className='flex  flex-col md:flex-row font-semibold mt-0  text-md space-x-4 rtl:space-x-reverse'>
							<li className='block px-2 md:border-l-[0.5px] border-r-[0.5px] border-gray-400 py-2 '>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'
									aria-current='page'>
									Home
								</a>
							</li>
							<li className='block pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>
									Book
								</a>
							</li>
							<li className='block pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>
									Service
								</a>
							</li>
							<li className='block pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>
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

export default Navbar;
