import { Outlet } from 'react-router-dom';
import Navbar from '../components/admin/Navbar';
import Banner from '../components/admin/Banner';

const Template = () => {
	return (
		<div className='flex flex-col min-h-screen'>
			<Navbar />
			<div className='mt-10'>
				<Banner />
			</div>

			<main className='flex-1'>
				<Outlet />
			</main>
		</div>
	);
};

export default Template;
