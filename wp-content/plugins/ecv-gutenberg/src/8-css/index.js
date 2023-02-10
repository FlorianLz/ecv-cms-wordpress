import { registerBlockType } from '@wordpress/blocks'

import './style.scss' // On importe la feuille de style du bloc

import Edit from './edit'
import save from './save'

registerBlockType( 'ecv-gutenberg/css', {
	edit: Edit,
	save,
} )
