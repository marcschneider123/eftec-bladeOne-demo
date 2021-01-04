/*
 * Font Awesome 5
 * @url https://fontawesome.com/how-to-use/with-the-api/setup/importing-icons
 */
import {library, dom}  from '@fortawesome/fontawesome-svg-core';
// import { fab } from '@fortawesome/free-brands-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
//importing specific icons
// import { faCheckSquare } from '@fortawesome/pro-solid-svg-icons'

library.add(fas);

// Kicks off the process of finding <i> tags and replacing with <svg>
dom.watch()

//import npm files from node_modules folder
import 'zurb-twentytwenty/js/jquery.event.move.js';
import 'zurb-twentytwenty/js/jquery.twentytwenty.js';

import './components/contact.js';
import './components/twentytwenty.js';
