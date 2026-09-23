console.log('loading components')

const header = document.querySelector('header')
/* Responsável por carregar todos os meus Web Componetns na página*/
/* Lembre-se de importar o script com a tag type="module"*/


/* Menu */
import { click } from '../../view/web-components/menu/app.js'

/* Redirect dos botões */
import '../redirect-buttons.js';

/* Lite Youtube */
import '../../web-components/lite-youtube/lite-yt-embed.js';

/* Videos Inspira */
import '../../web-components/video/video.js';


header.addEventListener('click', click)