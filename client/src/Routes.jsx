import { Route, Routes } from 'react-router-dom';

import HomePage from './pages/default/HomePage';
import NotFoundPage from './pages/NotFoundPage';

import Dasboard from './pages/admin/Dasboard';
import Admin from './pages/admin/Admin';
import Student from './pages/admin/Student';
import Login from './pages/admin/Login';
import AdminTemplate from './layouts/Template';
import DefaultTemplate from './layouts/DefaultTemplate';

const AppRoutes = () => {
	return (
		<Routes>
			{/* Main routes */}
			<Route element={<DefaultTemplate />}>
				<Route
					path='/'
					element={<HomePage />}
				/>
			</Route>

			{/* Admin routes */}
			<Route
				path='/admin'
				element={<AdminTemplate />}>
				<Route
					index
					element={<Admin />}
				/>
				<Route
					path='dashboard'
					element={<Dasboard />}
				/>
				<Route
					path='student'
					element={<Student />}
				/>
				<Route
					path='login'
					element={<Login />}
				/>
			</Route>

			{/* Catch-all route */}
			<Route
				path='*'
				element={<NotFoundPage />}
			/>
		</Routes>
	);
};

export default AppRoutes;
