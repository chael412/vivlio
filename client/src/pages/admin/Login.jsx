import axios from 'axios';
import {  QueryClient, QueryClientProvider } from '@tanstack/react-query';
import { useState } from 'react';
import { useNavigate } from 'react-router-dom';

const queryClient = new QueryClient();

const Login = () => {
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
			navigate('/dashboard');

			return;
		} catch (error) {
			console.error('Error login:', error);
		}
	};

	return (
		<div className='mt-16'>
			<div className='max-w-sm mx-auto'>
				<div className='mb-5'>
					<label
						htmlFor='email'
						className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
						Your email
					</label>
					<input
						type='email'
						id='email'
						className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
						placeholder='name@flowbite.com'
						required
						onChange={(e) => {
							setEmail(e.target.value);
						}}
					/>
				</div>
				<div className='mb-5'>
					<label
						htmlFor='password'
						className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
						Your password
					</label>
					<input
						type='password'
						id='password'
						className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
						required
						onChange={(e) => {
							setPassword(e.target.value);
						}}
					/>
				</div>
				<button
					onClick={() => authLogin()}
					className='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
					Login
				</button>
			</div>
		</div>
	);
};

const App = () => (
	<QueryClientProvider client={queryClient}>
		<Login />
	</QueryClientProvider>
);

export default App;
