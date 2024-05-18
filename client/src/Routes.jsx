import { Route, Routes } from 'react-router-dom';

import HomePage from './pages/default/HomePage';
import NotFoundPage from './pages/NotFoundPage';
import Dasboard from './pages/admin/Dasboard';

const AppRoutes = () => {
	return (
		<Routes>
			<Route
				path='*'
				element={<NotFoundPage />}
			/>
			<Route
				path='/'
				element={<HomePage />}
			/>
			<Route
				path='/dashboard'
				element={<Dasboard />}
			/>
		</Routes>
	);
};

export default AppRoutes;
