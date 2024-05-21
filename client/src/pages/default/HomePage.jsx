import 'flowbite';

import Hero from '../../components/default/Hero';

import ModalLogin from '../../components/auth/ModalLogin';

const HomePage = () => {
	return (
		<>
			<ModalLogin />
			<Hero />
		</>
	);
};

export default HomePage;
