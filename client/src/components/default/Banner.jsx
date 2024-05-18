const Subbar = () => {
	return (
		<div className='bg-[#006331] h-[100px] lg:h-[135px] mt-[5px] mb-1'>
			<div className='px-10 lg:px-16 flex items-center justify-between'>
				<div className='flex items-center text-white'>
					<img
						className='hidden lg:block'
						src='/public/img/menu.png'
						alt='isu'
						width={105}
					/>
					<div>
						<h3 className='text-xl  border-b'>Republic of the Philippines</h3>
						<h2 className='text-2xl'>ISABELA STATE UNIVERSITY</h2>
						<h3 className='text-xl'>City of Ilagan Campus</h3>
					</div>
				</div>
				<img
					className='lg:mr-20 hidden lg:block opacity-65'
					src='/public/img/isulibrary.jpg'
					alt='library'
					width={282}
				/>
			</div>
		</div>
	);
};

export default Subbar;
