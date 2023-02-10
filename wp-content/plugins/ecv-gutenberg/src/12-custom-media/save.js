import { __ } from '@wordpress/i18n'
import { useBlockProps, RichText } from '@wordpress/block-editor'

export default function save( props ) {
	const blockProps = useBlockProps.save()

	return (
		props.attributes.pictureID && (
			<div { ...blockProps }>
				<img src={ props.attributes.pictureURL } alt={ props.attributes.pictureAlt } />
				<RichText.Content
					tagName="div"
					multiline="p"
					className="custom-text"
					value={ props.attributes.customText }
				/>
			</div>
		)
	)
}
