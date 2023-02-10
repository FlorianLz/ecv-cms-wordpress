import { registerBlockType } from '@wordpress/blocks'

import './style.scss'

import Edit from './edit'
import save from './save'

registerBlockType( 'ecv-gutenberg/richtext-multiline', {
	edit: Edit,
	save,
} )
