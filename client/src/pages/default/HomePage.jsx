import 'flowbite';

import Hero from '../../components/default/Hero';
import Navbar from '../../components/default/Navbar';
import Subbar from '../../components/default/Banner';
import ModalLogin from '../../components/auth/ModalLogin';


const HomePage = () => {
	return (
		<>
			<Navbar />
			<Subbar />
			<ModalLogin />
			<Hero />
		</>
	);
};

export default HomePage;
