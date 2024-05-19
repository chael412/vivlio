import { Route, Routes } from 'react-router-dom';

import HomePage from './pages/default/HomePage';
import NotFoundPage from './pages/NotFoundPage';

import Dasboard from './pages/admin/Dasboard';
import Admin from './pages/admin/Admin';
import Student from './pages/admin/Student';
import Login from './pages/admin/Login';
import Template from './layouts/Template';

const AppRoutes = () => {
	return (
		<Routes>
			<Route
				path='/'
				element={<Template />}>
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
				<Route
					path='/admin'
					element={<Admin />}
				/>
				<Route
					path='/student'
					element={<Student />}
				/>
				<Route
					path='/login'
					element={<Login />}
				/>
			</Route>
		</Routes>
	);
};

export default AppRoutes;
