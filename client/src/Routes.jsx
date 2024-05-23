import { Route, Routes } from 'react-router-dom';

import HomePage from './pages/default/HomePage';
import NotFoundPage from './pages/NotFoundPage';

import Dasboard from './pages/admin/Dasboard';
import Student from './pages/admin/Student';
import Admin from './pages/admin/Admin';
import Catalog from './pages/admin/Catalog';
import Course from './pages/admin/Course';
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
					path='dashboard'
					element={<Dasboard />}
				/>
				<Route
					path='admin'
					element={<Admin />}
				/>
				<Route
					path='student'
					element={<Student />}
				/>
				<Route
					path='course'
					element={<Course />}
				/>
				<Route
					path='catalog'
					element={<Catalog />}
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
