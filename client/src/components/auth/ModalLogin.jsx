import { FiLogIn } from 'react-icons/fi';
import axios from 'axios';
import { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { toast } from 'react-toastify';

import 'react-toastify/dist/ReactToastify.css';

const ModalLogin = () => {
	const navigate = useNavigate();

	const [email, setEmail] = useState('');
	const [password, setPassword] = useState('');

	const authLogin = async () => {
		console.log(email, password);
		try {
			const { data } = await axios.get('http://127.0.0.1:8000/api/generateToken', {
				params: { email: email, password: password },
			});

			const token = data.token;
			localStorage.setItem('token', token);
			console.log('Login successful. Token stored.');

			toast.success('Login successfully');

			navigate('/dashboard');

			return;
		} catch (error) {
			console.error('Error login:', error);
		}
	};

	return (
		<div>
			<div
				id='crud-modal'
				tabIndex='-1'
				aria-hidden='true'
				className='hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full'>
				<div className='relative p-4 w-full max-w-md max-h-full'>
					<div className='relative bg-white rounded-lg shadow dark:bg-gray-700'>
						<div className='flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600'>
							<h3 className='text-lg font-semibold text-gray-900 dark:text-white'>Create New Product</h3>
							<button
								type='button'
								className='text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white'
								data-modal-toggle='crud-modal'>
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

						<div className='p-4 md:p-5'>
							<div className='grid gap-4 mb-4 grid-cols-2'>
								<div className='col-span-2'>
									<label
										htmlFor='name'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Email
									</label>
									<input
										type='email'
										name='email'
										id='email'
										className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
										placeholder='ex.pogi@gmail.com'
										required=''
										onChange={(e) => {
											setEmail(e.target.value);
										}}
									/>
								</div>
								<div className='col-span-2'>
									<label
										htmlFor='name'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Password
									</label>
									<input
										type='password'
										name='password'
										id='password'
										className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
										placeholder='Enter your password'
										required=''
										onChange={(e) => {
											setPassword(e.target.value);
										}}
									/>
								</div>
							</div>
							<button
								onClick={() => authLogin()}
								className='text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
								<FiLogIn className='text-lg mx-2' />
								Login
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};

export default ModalLogin;