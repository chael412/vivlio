import { BiBook } from 'react-icons/bi';

const Hero = () => {
	return (
		<section className="relative h-[450px] bg-cover bg-center bg-no-repeat bg-[url('/public/img/girl_in_lib.jpg')]">
			<div className='absolute inset-0 bg-[#2c3e50] opacity-50'></div>

			<div className='px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-36 relative z-10'>
				<h1 className='mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl'>Discover, learn, and grow with us</h1>
				<p className='mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48'>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus maxime odit eius magni dolores doloribus.
				</p>
				<div className='flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0'>
					<a
						href='#'
						className='inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900'>
						<BiBook className='text-2xl' />
						Browse Book
					</a>
					<a
						href='#'
						className='inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400'>
						Learn more
					</a>
				</div>
			</div>
		</section>
	);
};

export default Hero;
