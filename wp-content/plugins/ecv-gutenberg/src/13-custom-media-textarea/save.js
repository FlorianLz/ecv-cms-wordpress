import { __ } from '@wordpress/i18n'
import { useBlockProps, RichText } from '@wordpress/block-editor'

export default function save( props ) {
	const blockProps = useBlockProps.save()

	return (
		props.attributes.pictureID && (
			<div { ...blockProps } data-inversed={props.attributes.inversed ? "inversed" : null}>
				<img src={ props.attributes.pictureURL } alt={ props.attributes.pictureAlt } />
				<RichText.Content
					tagName="div"
					multiline="p"
					className="custom-textarea"
					value={ props.attributes.customText }
				/>
			</div>
		)
	)
}
