import { IoMdArrowDropdown } from 'react-icons/io';
import { Link } from 'react-router-dom';
const Navbar = () => {
	return (
		<div>
			<nav className='bg-white border-gray-200 dark:bg-gray-900  fixed w-full z-20 top-0 start-0 '>
				<div className='max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-5 py-1'>
					<button
						data-collapse-toggle='navbar-default'
						type='button'
						className='inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600'
						aria-controls='navbar-default'
						aria-expanded='false'>
						<span className='sr-only'>menu</span>
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
								<Link
									to='/admin/dashboard'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'
									aria-current='page'>
									Dashboard
								</Link>
							</li>
							<li className='flex items-center pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									id='masterButton'
									data-dropdown-toggle='master-dropdown'
									type='button'
									className='flex items-center space-x-1'>
									<span className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>Master file</span>
									<IoMdArrowDropdown className='text-gray-600 dark:text-white' />
								</a>

								<div
									id='master-dropdown'
									className='z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700'>
									<ul
										className='py-2 text-sm text-gray-700 dark:text-gray-200'
										aria-labelledby='multiLevelDropdownButton'>
										<li>
											<button
												id='userButton'
												data-dropdown-toggle='userDropdown'
												data-dropdown-placement='right-start'
												type='button'
												className='flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Users
												<svg
													className='w-2.5 h-2.5 ms-3 rtl:rotate-180'
													aria-hidden='true'
													xmlns='http://www.w3.org/2000/svg'
													fill='none'
													viewBox='0 0 6 10'>
													<path
														stroke='currentColor'
														strokeLinecap='round'
														strokeLinejoin='round'
														strokeWidth='2'
														d='m1 9 4-4-4-4'
													/>
												</svg>
											</button>
											<div
												id='userDropdown'
												className='z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700'>
												<ul
													className='py-2 text-sm text-gray-700 dark:text-gray-200'
													aria-labelledby='doubleDropdownButton'>
													<li>
														<Link
															to='/admin/admin'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Admins
														</Link>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Libarian
														</a>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Library Staff
														</a>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Faculties
														</a>
													</li>
													<li>
														<Link
															to='/admin/student'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Students
														</Link>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Visitors
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<a
												href='#'
												className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Course
											</a>
										</li>
										<li>
											<a
												href='#'
												className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Department
											</a>
										</li>
										<li>
											<button
												id='bookButton'
												data-dropdown-toggle='bookDropdown'
												data-dropdown-placement='right-start'
												type='button'
												className='flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Book
												<svg
													className='w-2.5 h-2.5 ms-3 rtl:rotate-180'
													aria-hidden='true'
													xmlns='http://www.w3.org/2000/svg'
													fill='none'
													viewBox='0 0 6 10'>
													<path
														stroke='currentColor'
														strokeLinecap='round'
														strokeLinejoin='round'
														strokeWidth='2'
														d='m1 9 4-4-4-4'
													/>
												</svg>
											</button>
											<div
												id='bookDropdown'
												className='z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700'>
												<ul
													className='py-2 text-sm text-gray-700 dark:text-gray-200'
													aria-labelledby='doubleDropdownButton'>
													<li>
														<Link
															to='/admin/catalog'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Catalog
														</Link>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Publishers
														</a>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Authors
														</a>
													</li>
													<li>
														<a
															href='#'
															className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
															Suppliers
														</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li className='flex items-center pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									id='transactionButton'
									data-dropdown-toggle='trasaction-dropdown'
									type='button'
									className='flex items-center space-x-1'>
									<span className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>Transaction</span>
									<IoMdArrowDropdown className='text-gray-600 dark:text-white' />
								</a>

								<div
									id='trasaction-dropdown'
									className='z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700'>
									<ul
										className='py-2 text-sm text-gray-700 dark:text-gray-200'
										aria-labelledby='transactionButton'>
										<li>
											<a
												href='#'
												className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Attendance
											</a>
										</li>
										<li>
											<a
												href='#'
												className='block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>
												Barrow/Return
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li className='block pr-2 border-r-[0.5px] border-gray-400 py-2'>
								<a
									href='#'
									className='text-gray-600 dark:text-white hover:underline hover:font-bold hover:text-green-500'>
									Report
								</a>
							</li>
						</ul>
					</div>

					<div className='flex items-center gap-5 mr-5'>
						<div>
							<span className='block text-sm text-gray-900 dark:text-white'>Bonnie</span>
						</div>
						{/* account */}
						<div className='flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse :'>
							<button
								type='button'
								className='flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600'
								id='user-menu-button'
								aria-expanded='false'
								data-dropdown-toggle='user-dropdown'
								data-dropdown-placement='bottom'>
								<span className='sr-only'>Open user menu</span>
								<img
									className='w-8 h-8 rounded-full ring-2 hover:ring-4'
									src='/public/img/account.png'
									alt='user photo'
								/>
							</button>

							<div
								className='z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600'
								id='user-dropdown'>
								<div className='px-4 py-3'>
									<span className='block text-sm text-gray-900 dark:text-white'>Bonnie Green</span>
									<span className='block text-sm  text-gray-500 truncate dark:text-gray-400'>name@flowbite.com</span>
								</div>
								<ul
									className='py-2'
									aria-labelledby='user-menu-button'>
									<li>
										<a
											href='#'
											className='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white'>
											Settings
										</a>
									</li>

									<li>
										<a
											href='/'
											className='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white'>
											Sign out
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	);
};

export default Navbar;
