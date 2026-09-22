import { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import ComingSoon from './coming-soon.jsx';

const root = document.getElementById('app');

if (root) {
    createRoot(root).render(
        <StrictMode>
            <ComingSoon />
        </StrictMode>
    );
}
