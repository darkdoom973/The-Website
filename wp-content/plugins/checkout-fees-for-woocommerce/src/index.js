//import registerCheckoutBlock from '@woocommerce/blocks-checkout';
import { registerBlockType } from '@wordpress/blocks';
import { SVG } from '@wordpress/components';
import metadata from './block.json';

registerBlockType(metadata, {
	icon: {
		src: (
			<SVG xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">

				<defs>
				</defs>
				<g transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
					<path d="M 87.172 17.696 H 67.083 c 0.035 -0.2 0.062 -0.403 0.062 -0.613 V 7.205 c 0 -1.306 -0.678 -2.471 -1.815 -3.115 c -1.137 -0.645 -2.485 -0.629 -3.605 0.043 l -16.49 9.877 c -0.084 0.05 -0.156 0.112 -0.235 0.168 c -0.078 -0.056 -0.15 -0.117 -0.234 -0.167 L 28.275 4.133 c -1.121 -0.67 -2.468 -0.687 -3.604 -0.043 c -1.137 0.644 -1.815 1.809 -1.815 3.115 v 9.877 c 0 0.21 0.027 0.413 0.062 0.613 H 2.828 C 1.269 17.696 0 18.964 0 20.523 v 10.02 c 0 1.559 1.269 2.828 2.828 2.828 h 2.513 v 48.956 c 0 2.236 1.819 4.056 4.055 4.056 h 28.722 h 13.764 h 28.723 c 2.236 0 4.055 -1.82 4.055 -4.056 V 33.371 h 2.513 c 1.56 0 2.828 -1.269 2.828 -2.828 v -10.02 C 90 18.964 88.732 17.696 87.172 17.696 z M 46.759 16.556 l 16.49 -9.877 c 0.112 -0.067 0.218 -0.091 0.313 -0.091 c 0.13 0 0.238 0.045 0.305 0.083 c 0.116 0.066 0.311 0.223 0.311 0.534 v 9.877 c 0 0.338 -0.275 0.613 -0.613 0.613 h -5.35 h -11.14 c -0.385 0 -0.527 -0.25 -0.58 -0.42 c 0.008 -0.142 0.017 -0.285 0.009 -0.425 C 46.544 16.747 46.615 16.642 46.759 16.556 z M 55.247 30.404 h -3.366 H 38.118 h -3.366 v -9.741 h 8.174 h 4.149 h 8.173 V 30.404 z M 25.822 17.082 V 7.205 c 0 -0.311 0.195 -0.468 0.311 -0.534 c 0.068 -0.038 0.175 -0.083 0.305 -0.083 c 0.094 0 0.2 0.024 0.312 0.09 l 16.491 9.878 c 0.144 0.087 0.214 0.191 0.255 0.296 c -0.008 0.139 0.001 0.281 0.009 0.422 c -0.053 0.17 -0.194 0.422 -0.58 0.422 H 31.785 h -5.349 C 26.098 17.696 25.822 17.42 25.822 17.082 z M 2.967 30.404 v -9.741 h 23.469 h 5.349 v 9.741 H 5.341 H 2.967 z M 9.396 83.415 c -0.6 0 -1.088 -0.489 -1.088 -1.088 V 33.371 h 23.477 h 6.333 v 50.044 H 9.396 z M 41.085 83.415 V 33.371 h 7.83 v 50.044 H 41.085 z M 81.692 82.327 c 0 0.6 -0.488 1.088 -1.088 1.088 H 51.882 V 33.371 h 6.333 h 23.477 V 82.327 z M 87.033 30.404 h -2.374 H 58.215 v -9.741 h 5.35 h 23.469 V 30.404 z"  transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
				</g>
			</SVG>
		),
		foreground: '#874FB9',
	},
	edit: Edit
});