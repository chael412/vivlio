import { Outlet } from 'react-router-dom';
import Navbar from '../components/default/Navbar';
import Banner from '../components/default/Banner';

const DefaultTemplate = () => {
	return (
		<div className='flex flex-col min-h-screen'>
			<Navbar />
			<div className='mt-2 mb-1'>
				<Banner />
			</div>
			<main className='flex-1'>
				<Outlet />
			</main>
		</div>
	);
};

export default DefaultTemplate;
