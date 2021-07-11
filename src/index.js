import { registerBlockStyle } from '@wordpress/blocks';
import { registerBlockType } from '@wordpress/blocks';
 
registerBlockType( 'pluginframe/test-block', {
    title: 'Basic Example',
    icon: 'smiley',
    category: 'design',
    edit: () => <div>Hola, mundo!</div>,
    save: () => <div>Hola, mundo!</div>,
} );

registerBlockStyle( 'core/quote', {
   name: 'fancy-quote',
   label: 'Fancy Quote',
} );