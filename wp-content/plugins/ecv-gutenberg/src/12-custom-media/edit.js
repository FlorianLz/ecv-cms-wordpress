import {__} from '@wordpress/i18n'
import {useBlockProps, MediaUpload, MediaUploadCheck, RichText} from '@wordpress/block-editor'
import {Placeholder, Button} from '@wordpress/components'

import './editor.scss'

export default function Edit(props) {
	const blockProps = useBlockProps()

	// Attribution des informations de l'image
	const onSelectImage = picture => {

		console.log(picture) // Afficher les informations récupérées de l'image

		props.setAttributes({
			pictureID: picture.id,
			pictureURL: picture.url,
			pictureAlt: picture.alt,
		})
	}

	// Effacement des données de l'image
	const onRemoveImage = () => {
		props.setAttributes({
			pictureID: null,
			pictureURL: null,
			pictureAlt: null,
		})
	}

	return (
		<div {...blockProps}>
			{!props.attributes.pictureID ? (
				<MediaUploadCheck>
					<MediaUpload
						onSelect={onSelectImage}
						allowedTypes={['image']}
						value={props.attributes.pictureID}
						render={({open}) => (
							<Placeholder
								icon="images-alt"
								label={__('Photo', 'ecv-gutenberg')}
								instructions={__('Choisir une photo', 'ecv-gutenberg')}
							>
								<Button
									isSecondary
									isLarge
									onClick={open}
									icon="upload"
								>
									{__('Importer', 'ecv-gutenberg')}
								</Button>
							</Placeholder>
						)}
					/>
				</MediaUploadCheck>

			) : (

				<p className="ecv-custom-media-wrapper">
					<img
						src={props.attributes.pictureURL}
						alt={props.attributes.pictureAlt}
					/>

					{props.isSelected && (

						<Button
							className="ecv-custom-media-remove-image"
							onClick={onRemoveImage}
							icon="dismiss"
						>
							{__('Supprimer la photo', 'ecv-gutenberg')}
						</Button>

					)}
				</p>
			)}
			{props.attributes.pictureID ? (
			<RichText
				tagName="div"
				multiline="p"
				placeholder={__('Texte sur l\'image', 'ecv-gutenberg')}
				value={props.attributes.customText}
				className="custom-text"
				onChange={customText => props.setAttributes({customText})} // Sauvegarde de l'attribut
			/>
			) : null}
		</div>

	)
}
