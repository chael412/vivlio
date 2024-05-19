import { createContext, useContext } from 'react';
import { useState } from 'react';
import PropTypes from 'prop-types';

const DataStoreContext = createContext();

export function DataStoreProvider({ children }) {
	const [isModal, setIsModal] = useState(false);

	return (
		<DataStoreContext.Provider
			value={{
				isModal,
				setIsModal,
			}}>
			{children}
		</DataStoreContext.Provider>
	);
}

DataStoreProvider.propTypes = {
	children: PropTypes.node.isRequired,
};

// eslint-disable-next-line react-refresh/only-export-components
export function useDataStore() {
	return useContext(DataStoreContext);
}
