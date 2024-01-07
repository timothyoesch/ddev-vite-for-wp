import { defineConfig } from 'vite';
import { v4wp } from '@kucrut/vite-for-wp';
import path from 'path'

const port = 5173;
const origin = `${process.env.DDEV_PRIMARY_URL}:${port}`;

export default defineConfig({
	plugins: [
		v4wp({
			input: 'js/src/main.js',
			outDir: 'js/dist',
		}),
	],

	// Adjust Vites dev server for DDEV
	// https://vitejs.dev/config/server-options.html
	server: {
		host: 'ddev-vite-for-wp.ddev.site',
		port: port,
		strictPort: true,
		https: true,
		// Defines the origin of the generated asset URLs during development
		origin: origin
	},
});
