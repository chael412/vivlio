import { useDataStore } from '../context/DataStoreContext';
import PropTypes from 'prop-types';

const Modal = ({ action }) => {
	const { isModal, setIsModal } = useDataStore();

	return (
		<div
			id='large-modal'
			tabIndex='-1'
			className={` ${
				isModal ? '' : 'hidden'
			} backdrop-blur flex justify-center inset-0 items-center fixed z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full`}>
			<div className='relative w-full max-w-4xl max-h-full'>
				<div className='relative bg-white rounded-lg shadow dark:bg-gray-700'>
					<div className='flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600'>
						<h3 className='text-xl font-medium text-gray-900 dark:text-white'>{action}</h3>
						{action == 'add' ? <p>helow</p> : null}
						<button
							type='button'
							className='text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white'
							onClick={() => setIsModal(false)}>
							<svg
								className='w-3 h-3'
								aria-hidden='true'
								xmlns='http://www.w3.org/2000/svg'
								fill='none'
								viewBox='0 0 14 14'>
								<path
									stroke='currentColor'
									strokeLinecap='round'
									strokeLinejoin='round'
									strokeWidth='2'
									d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'
								/>
							</svg>
							<span className='sr-only'>Close modal</span>
						</button>
					</div>

					{action == 'add' ? (
						<div className='p-4 md:p-5 space-y-4'>
							<form
								className='space-y-4'
								action='#'>
								<div>
									{action}
									<label
										htmlFor='email'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Your email
									</label>
									<input
										type='email'
										name='email'
										id='email'
										className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white'
										placeholder='name@company.com'
										required
									/>
								</div>
								<div>
									<label
										htmlFor='password'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Your password
									</label>
									<input
										type='password'
										name='password'
										id='password'
										placeholder='••••••••'
										className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white'
										required
									/>
								</div>
							</form>
						</div>
					) : null}

					{action == 'view' ? (
						<div className='p-4 md:p-5 space-y-4'>
							<form
								className='space-y-4'
								action='#'>
								<div>
									{action}
									<label
										htmlFor='email'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Your email view
									</label>
								</div>
								<div>
									<label
										htmlFor='password'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Your password
									</label>
								</div>
							</form>
						</div>
					) : null}

					<div className='flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600'>
						<button
							data-modal-hide='large-modal'
							type='button'
							className='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
							I accept
						</button>
						<button
							data-modal-hide='large-modal'
							type='button'
							className='py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700'>
							Decline
						</button>
					</div>
				</div>
			</div>
		</div>
	);
};

Modal.propTypes = {
	action: PropTypes.string.isRequired,
};

export default Modal;
