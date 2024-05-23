import { FaSave } from 'react-icons/fa';
import { useDataStore } from '../../context/DataStoreContext';
import PropTypes from 'prop-types';

import 'react-date-picker/dist/DatePicker.css';
import 'react-calendar/dist/Calendar.css';
import { useState } from 'react';
import axios from 'axios';
import { toast } from 'react-toastify';

const AdminModal = ({ action }) => {
	const { isModal, setIsModal } = useDataStore();
	const [firstname, setFirstname] = useState('');
	const [middlename, setMiddlename] = useState('');
	const [lastname, setLastname] = useState('');
	const [birthdate, setBirthdate] = useState('');
	const [gender, setGender] = useState('');
	const [email, setEmail] = useState('');
	const [password, setPassword] = useState('');

	const createAdmin = async () => {
		try {
			const params = {
				firstname: firstname,
				middlename: middlename,
				lastname: lastname,
				gender: gender,
				birthdate: birthdate,
				email: email,
				password: password,
				user_type: 'admin',
			};

			console.log(params);
			const { data } = await axios.post('http://127.0.0.1:8000/api/admins', params);
			if (data) {
				toast.success('Admin created successfully.');
				await new Promise((resolve) => setTimeout(resolve, 2500));
				setIsModal(false);
				window.location.reload();
			} else {
				toast.success('Admin failed created.');
				setIsModal(false);
			}
		} catch (error) {
			console.error('Error Create:', error);
			toast.error('Error creating admin');
		}
	};

	return (
		<div
			id='large-modal'
			tabIndex='-1'
			className={` ${
				isModal ? '' : 'hidden'
			} backdrop-opacity-30 backdrop-invert bg-white/5  flex justify-center inset-0 items-center fixed z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full`}>
			<div className='relative w-full max-w-4xl max-h-full'>
				<div className='relative bg-white rounded-sm shadow dark:bg-gray-700'>
					<div className='flex items-center justify-between p-2 md:p-3 border-b rounded-t dark:border-gray-600'>
						<h3 className='text-xl font-medium text-gray-900 dark:text-white'>
							{action == 'add' ? <p>Add Admin</p> : null}
							{action == 'view' ? <p>View Admin</p> : null}
							{action == 'edit' ? <p>Edit Admin</p> : null}
							{action == 'delete' ? <p>Delete Admin</p> : null}
						</h3>
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
						<div className='p-4 md:p-5 space-y-2'>
							<div className='grid grid-cols-2 gap-4'>
								<div>
									<label
										htmlFor='email'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Firstname
									</label>
									<input
										onChange={(e) => {
											setFirstname(e.target.value);
										}}
										type='text'
										id='firstname'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
								<div>
									<label
										htmlFor='email'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Middlename
									</label>
									<input
										onChange={(e) => {
											setMiddlename(e.target.value);
										}}
										type='text'
										id='small-input'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
							</div>
							<div className='grid grid-cols-2 gap-4'>
								<div>
									<label
										htmlFor='lastname'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Lastname
									</label>
									<input
										onChange={(e) => {
											setLastname(e.target.value);
										}}
										type='text'
										id='lastname'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
								<div>
									<label htmlFor=''>Birthdate</label>
									<input
										onChange={(e) => {
											setBirthdate(e.target.value);
										}}
										type='date'
										id='small-input'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
							</div>
							<div className='grid sm:grid-cols-2 grid-cols-1 gap-4'>
								<div>
									<label
										htmlFor='small'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Gender
									</label>
									<select
										defaultValue={'DEFAULT'}
										id='small'
										className='block w-full p-1 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
										value={gender}
										onChange={(e) => setGender(e.target.value)}>
										<option defaultValue={'DEFAULT'}>------ Select a gender ------</option>
										<option value='Male'>Male</option>
										<option value='Female'>Female</option>
									</select>
								</div>
								<div>
									<label
										htmlFor='student_no'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Email
									</label>
									<input
										onChange={(e) => {
											setEmail(e.target.value);
										}}
										type='email'
										id='small-input'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
							</div>
							<div className='grid grid-cols-2 gap-4'>
								<div>
									<label
										htmlFor='email'
										className='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>
										Password
									</label>
									<input
										onChange={(e) => {
											setPassword(e.target.value);
										}}
										type='text'
										id='password'
										className='block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
									/>
								</div>
								<div></div>
							</div>
						</div>
					) : null}

					{action == 'view' ? (
						<div className='p-4 md:p-5 space-y-4'>
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
						</div>
					) : null}

					<div className='flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600'>
						{action == 'add' ? (
							<button
								onClick={() => createAdmin()}
								type='button'
								className='flex items-center gap-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
								<FaSave className='text-lg' /> Save
							</button>
						) : null}
						{action == 'edit' ? (
							<button
								type='button'
								className='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
								Update
							</button>
						) : null}
						{action == 'delete' ? (
							<button
								type='button'
								className='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
								Delete
							</button>
						) : null}

						{action !== 'view' ? (
							<button
								onClick={() => setIsModal(false)}
								type='button'
								className='py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700'>
								Cancel
							</button>
						) : null}
					</div>
				</div>
			</div>
		</div>
	);
};

AdminModal.propTypes = {
	action: PropTypes.string.isRequired,
};

export default AdminModal;
