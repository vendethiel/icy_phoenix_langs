<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// MG CMS - BEGIN
	'CMS_WELCOME' => 'Bienvenido a Icy Phoenix',
	'BP_Title' => 'Bloquea la posición del título',
	'BP_Explain' => 'Desde este panel de control puede añadir, editar o borrar la posición de los bloques que pueden ser usados en el portal IM. Las posiciones por defecto son \'header\', \'footer\', \'right\' and \'center\'. Sólo posiciones existentes por página principal deben añadirse aquí. Los códigos de posiciones que no existan en la etiqueta especificada no aparecerán en la página principal. Cada llave de posición y carácter deben ser únicos para cada página.',
	'BP_Position' => 'Posición del carácter',
	'BP_Key' => 'Tecla de etiqueta de posición',
	'BP_Layout' => 'Página web',
	'BP_Add_Position' => 'Añadir nueva posición',
	'No_bp_selected' => 'No se ha seleccionado una posición para editar',
	'BP_Edit_Position' => 'Editar posición de bloque',
	'Must_enter_bp' => 'Debe añadir un código de posición, carácter de posición y página web',
	'BP_updated' => 'Posición de bloque actualizada',
	'BP_added' => 'Posición de bloque añadida',
	'Click_return_bpadmin' => 'Pulse %saquí%s para volver a administración de edición de bloques.',
	'BP_removed' => 'Posición de bloque eliminada',
	'Portal_wide' => 'Ancho de portal',

	'No_layout_selected' => 'No se ha seleccionado página de portal para editar',
	'LAYOUT_TITLE' => 'Página de portal',
	'LAYOUT_TEXT' => 'Desde este panel de control puede añadir, editar o eliminar información de la distribución de sus páginas de portal. Varias páginas de portal pueden usar la misma distribución. El archivo de plantilla de la distribución seleccionado debe estar en la carpeta layout que se encuentra en la carpeta template de su foro. No puede eliminar la página portal por defecto de su foro. Eliminar una página de portal elimina también las correspondientes posiciones de los bloques de esa página y todos los bloques asignados a ella',
	'Layout_Special_Explain' => 'Desde este panel de control, puede añadir, editar o borrar bloques para páginas estándares de su foro (ej.: foro, ver tema, lista de usuarios, descargas, álbum, etc.).',
	'LAYOUT_NAME' => 'Nombre',
	'LAYOUT_TEMPLATE' => 'Archivo de plantilla',
	'LAYOUT_EDIT' => 'Editar página de portal',
	'Layout_Page' => 'ID de página',
	'LAYOUT_VIEW' => 'Ver por',
	'LAYOUT_EDIT_PERM' => 'Editar permisos',
	'LAYOUT_GLOBAL_BLOCKS' => 'Mostrar bloques globales',
	'LAYOUT_PAGE_NAV' => 'Página bloque navegación (Breadcrumbs)',
	'Must_enter_layout' => 'Debe introducir un nombre y un archivo de plantilla',
	'Layout_updated' => 'Página de portal actualizada',
	'Click_return_layoutadmin' => 'Pulse %saquí%s para volver a la administración de página de portal',
	'Layout_added' => 'Página de portal añadida',
	'Layout_removed' => 'Página de portal eliminada',
	'LAYOUT_ADD' => 'Añadir página de portal',
	'Layout_BP_added' => 'Archivo de configuración de la distribución accesible: etiquetas de posiciones de bloques insertadas automáticamente',
	'Layout_default' => 'Por defecto',
	'Layout_make_default' => 'Hacer por defecto',

	'BLOCKS_TITLE' => 'Administración de bloques',
	'BLOCKS_TEXT' => 'Desde este panel de control puede añadir, editar, eliminar y mover bloques para cada página de portal disponible. Una plantilla de bloque debe existir para cada bloque añadido. Cuando un archivo de bloque es especificado, el contenido insertado es ignorado por el motor del portal.',
	'BLOCKS_CREATION' => 'Desde este panel de control puede duplicar bloques desde otros diseños. Solo los bloques compatibles seleccionados en el diseño pueden mostrarse. Para duplicar un bloque tiene que marcar el cuadro del bloque que quiere añadir en la actual plantilla y hacer clic en el botón "Duplicar bloques" en la parte inferior de la página.',
	'BLOCKS_CREATION_01' => 'Añadir / editar bloque página 1 de 2',
	'BLOCKS_CREATION_02' => 'Añadir / editar bloque página 2 de 2',
	'CMS_STANDARD_PAGES' => 'Páginas estándares',
	'CMS_CUSTOM_PAGES' => 'Páginas personalizadas',
	'CMS_CUSTOM_PAGES_ADV' => 'Páginas CMS ADV',
	'CHOOSE_LAYOUT' => 'Seleccione página',
	'B_TITLE' => 'Título de bloque',
	'B_NAME' => 'Nombre',
	'B_POSITION' => 'Posición de bloque',
	'B_ACTIVE' => '&iquest;Activo?',
	'B_DISPLAY' => 'Contenido',
	'B_HTML' => 'HTML',
	'B_BBCODE' => 'BBCode',
	'B_TYPE' => 'Tipo',
	'B_BORDER' => 'Mostrar borde',
	'B_Border_and_Background' => 'Borde y BG',
	'B_TITLEBAR' => 'Mostrar barra de título',
	'B_Titlebar_Content' => 'Título de la barra',
	'B_BACKGROUND' => 'Mostrar fondo',
	'B_LOCAL' => 'Localizar barra de título',
	'B_Cache' => 'Caché?',
	'B_Cachetime' => 'Duración de caché',
	'B_GROUPS' => 'Grupos de usuarios',
	'B_ALL' => 'Todos',
	'B_GUESTS' => 'Sólo invitados',
	'B_REG' => 'Usuarios registrados',
	'B_MOD' => 'Moderadores',
	'B_ADMIN' => 'Administradores',
	'B_NONE' => 'Nadie',
	'B_LAYOUT' => 'Página de portal',
	'B_LAYOUT_EDIT' => 'Editar configuración de página',
	'B_PAGE' => 'Id de página',
	'B_ADD' => 'Añadir bloques',
	'B_UPDATE' => 'Actualizar bloques',
	'YES' => 'Sí',
	'NO' => 'No',
	'ENABLED' => 'Activado',
	'DISABLED' => 'Desactivado',
	'B_TEXT' => 'Texto',
	'B_FILE' => 'Archivo de bloque',
	'B_MOVE_UP' => 'Mover arriba',
	'B_MOVE_DOWN' => 'Mover abajo',
    'B_MOVE' => 'Mover', 
	'B_VIEW_BY' => 'Ver por',
	'B_TEXT_BLOCK' => 'Bloque de texto o HTML',
	'NO_BLOCKS_AVAILABLE' => 'No hay bloques en este diseño, pulse en "Añadir bloque" para añadir uno',
	'No_blocks_selected' => 'No se ha seleccionado bloque',
	'B_CONTENT' => 'Contenido',
	'B_BLOCKFILE' => 'Archivo de bloque',
    'Block_Edit' => 'Editar bloque',
	'Block_updated' => 'Bloque actualizado',
	'Blocks_updated' => 'Bloques actualizados',
	'Must_enter_block' => 'Debe introducir un título de bloque',
	'Block_added' => 'Bloque añadido',
	'Blocks_added' => 'Bloques añadidos',
	'Blocks_duplicated' => 'Bloques duplicados',
	'Click_return_blocksadmin' => 'Pulse %saquí%s para volver a la administración de bloques.',
	'Block_removed' => 'Bloque eliminado',
	'B_BV_added' => 'Archivo de configuración de bloque disponible: Variables de bloque insertadas automáticamente',
    'B_EDIT_BS' => 'Editar Ajustes',
	'B_EDIT' => 'Editar',
	'B_DELETE' => 'Borrar',

	'BV_Title' => 'Variables de bloque',
	'BV_Explain' => 'Desde este panel de control puede añadir, editar o eliminar variables de configuración de bloques que son usadas en IM Portal. Estas variables pueden, entonces, configurarse a través de la página de configuración de portal para personalizar su portal.','BV_Label' => 'Etiqueta de campo',
	'BV_Label' => 'Campo de etiquetas',
	'BV_Sub_Label' => 'Información de campo',
	'BV_Name' => 'Nombre de configuración',
	'BV_Options' => 'Opciones',
	'BV_Values' => 'Valores de campo',
	'BV_Type' => 'Tipo de control',
	'BV_Block' => 'Bloque',
	'BV_Add_Variable' => 'Añadir variable de bloque',
	'No_bv_selected' => 'No ha seleccionado ninguna variación en el bloque',
	'BV_Edit_Variable' => 'Editar variable de bloque',
	'Must_enter_bv' => 'Debe introducir una etiqueta de campo y un nombre de configuración',
	'BV_updated' => 'Variable de bloque actualizado',
	'BV_added' => 'Variable de bloque añadida',
    'Click_return_bvadmin' => 'Pulse %saquí%s para volver a la administración de variables de bloque',
	'Config_Name_Explain' => 'No debe contener espacios',
	'Field_Options_Explain' => 'Obligatorio para listar desplegables y<br />botones de selección (delimitados por comas).',
	'Field_Values_Explain' => 'Obligatorio para listas desplegables y<br />botones de selección (delimitados por comas).',
	'BV_removed' => 'Variable de bloque eliminada',

	'Config_updated' => 'Configuración actualizada',
	'Click_return_config' => 'Pulse %saquí%s para volver a configuración',
	'Portal_Config' => 'Configuración de IM Portal',
	'Portal_Explain' => 'Desde este panel de control puede establecer todas las configuraciones necesarias para su portal. Las variables de bloque listadas en esta página pueden ser creadas o actualizadas en la página de configuración de variables de bloque',
	'Portal_General_Config' => 'Configuración general',
	'Default_Portal' => 'Página principal por defecto',
	'Default_Portal_Explain' => 'Página de inicio del foro',
	'Cache_Enabled' => 'Activar sistema de caché',
	'Cache_Enabled_Explain' => 'Para una carga más rápida de información relacionada con el portal',
	'Confirm_delete_item' => '&iquest;Está seguro de que desea eliminarlo?',
	'Cache_cleared' => 'Archivos de caché eliminados',

	'cms_pos_header' => 'Encabezado de página',
	'cms_pos_headerleft' => 'Izquierda',
	'cms_pos_headercenter' => 'Arriba/centrar',
	'cms_pos_footercenter' => 'Abajo/centrar',
	'cms_pos_footerright' => 'Derecha',
	'cms_pos_footer' => 'Pie de página',
	'cms_pos_nav' => 'Menú de navegación',
	'cms_pos_left' => 'Izquierda',
	'cms_pos_center' => 'Centro',
	'cms_pos_right' => 'Derecha',
	'cms_pos_xsnews' => 'Noticias (Centro)',
	'cms_pos_centerbottom' => 'Abajo/centrar',
	'cms_pos_toprow' => 'Arriba',
	'cms_pos_column1' => 'Columna 1 (Izquierda)',
	'cms_pos_column2' => 'Columna 2 (Derecha)',
	'cms_pos_bottomrow' => 'Abajo',
	'cms_pos_gheader' => 'Encabezado Global',
	'cms_pos_gfooter' => 'Pie de página Global',
	'cms_pos_ghtop' => 'Encabezado arriba',
	'cms_pos_ghbottom' => 'Encabezado abajo',
	'cms_pos_ghleft' => 'Encabezado central (Izquierda)',
	'cms_pos_ghright' => 'Encabezado central (Derecha)',
//	'cms_pos_' => '',

	'cms_block_ads' => 'Publicidad',
	'cms_block_ads_tla' => 'Publicidad en Enlaces de Texto',
	'cms_block_ajax_shoutbox' => 'Chat AJAX',
	'cms_block_album' => 'álbum',
	'cms_block_birthdays' => 'Cumpleaños',
	'cms_block_calendar' => 'Calendario',
	'cms_block_calendar_events' => 'Eventos',
	'cms_block_center_downloads' => 'Descargas',
	'cms_block_clock' => 'Reloj',
	'cms_block_donate' => 'Donaciones',
	'cms_block_dyn_menu' => 'Menú dinámico',
	'cms_block_flash_news' => 'Noticias flash',
	'cms_block_forum' => 'Noticias',
	'cms_block_forum_attach' => 'Noticias avanzadas',
	'cms_block_forum_list' => 'Listado de foros',
	'cms_block_full_search' => 'Búsqueda completa',
	'cms_block_global_header' => 'Encabezado global',
	'cms_block_global_header_simple' => 'Encabezado global simple',
	'cms_block_gsearch' => 'Búsqueda google',
	'cms_block_gsearch_hor' => 'Búsqueda de google horizontal',
	'cms_block_index' => 'Mapa del sitio',
	'cms_block_jumpbox' => 'Jumpbox',
	'cms_block_kb' => 'Biblioteca',
	'cms_block_links' => 'Enlaces',
	'cms_block_menu' => 'Menú de navegación',
	'cms_block_nav_header' => 'Encabezado',
	'cms_block_nav_links' => 'Mapa web',
	'cms_block_nav_logo' => 'Logo',
	'cms_block_new_downloads' => 'Nuevas descargas',
	'cms_block_news' => 'Noticias',
	'cms_block_news_archive' => 'Archivo de noticias',
	'cms_block_news_posters' => 'Nuevos posters',
	'cms_block_online_users' => 'Quién está conectado',
	'cms_block_online_users2' => 'Quién está conectado',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Donaciones',
	'cms_block_plugin_guestbook' => 'Libro de Visitas',
	'cms_block_poll' => 'Encuesta',
	'cms_block_random_attach' => 'Adjuntos aleatorios',
	'cms_block_random_quote' => 'Cita aleatoria',
	'cms_block_random_topics' => 'Temas aleatorios',
	'cms_block_random_topics_ver' => 'Temas aleatorios',
	'cms_block_random_user' => 'Usuario aleatorio',
	'cms_block_recent_articles' => 'Artículos recientes',
	'cms_block_recent_topics' => 'Temas recientes',
	'cms_block_recent_topics_wide' => 'Temas recientes',
	'cms_block_referers' => 'Referidos',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Buscar',
	'cms_block_sec_menu' => 'Menú extra',
	'cms_block_sh_visit_counter' => 'Contador de Visitas',
	'cms_block_shoutbox' => 'Chat',
	'cms_block_staff' => 'Equipo',
	'cms_block_statistics' => 'Estadísticas',
	'cms_block_style' => 'Estilo',
	'cms_block_top_downloads' => 'Top descargas',
	'cms_block_top_nav' => 'Top nav',
	'cms_block_top_posters' => 'Los que mas escriben',
	'cms_block_user_block' => 'Bloque de usuario',
	'cms_block_users_visited' => 'Usuarios activos',
	'cms_block_visit_counter' => 'Contador visitas',
	'cms_block_welcome' => 'Bienvenido',
	'cms_block_wordgraph' => 'Palabras más usadas',
	'cms_block_xs_news' => 'Noticias Icy Phoenix',
//	'cms_block_' => '',

	'cms_var_cms_style' => 'CMS estilo moderno',
	'cms_var_cms_style_explain' => 'estilo moderno por CMS consiste en un moderno diseño con un menú transparente',
	'cms_var_header_width' => 'Anchura global de la columna izquierda',
	'cms_var_header_width_explain' => 'Anchura de la columna izquierda en píxels',
	'cms_var_footer_width' => 'Anchura global de la columna derecha',
	'cms_var_footer_width_explain' => 'Anchura de la columna derecha en píxels',
	'cms_var_md_cache_file_locking' => 'Bloqueo del archivo de caché',
	'cms_var_md_cache_file_locking_explain' => 'Puede evitar la corrupción del caché en circunstancias malas',
	'cms_var_md_cache_write_control' => 'Control de escritura del caché',
	'cms_var_md_cache_write_control_explain' => 'Detecta algunos archivos corruptos del caché',
	'cms_var_md_cache_read_control' => 'Control de lectura del caché',
	'cms_var_md_cache_read_control_explain' => 'Controla las \'keys\' integradas en los archivos de caché',
	'cms_var_md_cache_read_type' => 'Tipo de control de lectura del caché',
	'cms_var_md_cache_read_type_explain' => 'Tipo de control de lectura (solo si el control de lectura está habilitado)',
	'cms_var_md_cache_filename_protect' => 'Protección del nombre de los archivos del caché',
	'cms_var_md_cache_filename_protect_explain' => 'Encripta el nombre del archivo de caché para una mejor seguridad',
	'cms_var_md_cache_serialize' => 'Serialización automática del caché',
	'cms_var_md_cache_serialize_explain' => 'Activa / desactiva la serialización automática',
//	'cms_var_' => '',

	'CMS_Config_updated' => 'Configuración actualizada satisfactoriamente',
	'CMS_Click_return_config' => 'Pulse %saquí%s pera volver a las configuraciones',
	'CMS_Click_return_cms' => 'Pulse %saquí%s para volver a la administración del CMS',
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Administración CMS',
	'CMS_CONFIG' => 'Configuración CMS',
	'CMS_ACP' => 'Editar esta página',
	'CMS_PAGES' => 'Páginas de la web',
	'CMS_ID' => 'ID',
	'CMS_ACTIONS' => 'Acciones',
	'CMS_LAYOUT' => 'Distribución',
	'CMS_BLOCKS' => 'Bloques',
	'CMS_NAME' => 'Nombre',
	'CMS_DESCRIPTION' => 'Descripción',
	'CMS_LAYOUT_PAGE_ID' => 'ID página',
	'CMS_LAYOUT_PAGE_ID_EXPLAIN' => 'Es el ID de la página utilizado para el sistema de autorizaciones. Caracteres permitidos: minúsculas, números, barra baja, no espacios.',
	'CMS_MUST_FILL_ALL_FIELDS' => 'Tiene que rellenar todos los campos',
	'CMS_FILENAME' => 'Nombre del archivo',
	'CMS_FILENAME_EXPLAIN' => '<i>(Para crear un nuevo archivo, su servidor tiene que estar configurado correctamente para soportar esta característica)</i>',
	'CMS_Filename_Explain_OK' => '<i>Después de una prueba rápida, parece que su servidor permite la creación automática de ficheros, por lo tanto el fichero ha de ser creado automáticamente.</i>',
	'CMS_Filename_Explain_NO' => '<i>Después de una prueba rápida, parece que su servidor <b>NO PERMITE</b> la creación automática de ficheros. Si desea crear una nueva página con un nuevo nombre ha de crear manualmente el archivo en el servidor, haciendo una copia de <b>index_empty.php</b> y renombrandolo según el nombre que usted ha escogido aquí. Como alternativa puede asignar los permisos correctos en la raíz de su sitio web, y así el procedimiento funcionará automáticamente.</i>',
	'CMS_TEMPLATE' => 'Plantilla',
	'CMS_FileAlreadyExists' => 'El archivo que está intentando crear ya existe. Por favor, seleccione otro nombre para el archivo.',
	'CMS_FileCreationSuccess' => 'La nueva página ha sido creada automáticamente.',
	'CMS_FileCreationError' => 'El archivo no ha podido ser creado.',
	'CMS_FileCreationManual' => 'Por favor, haga una copia del index_empty.php, asígnele el nombre que ha insertado en el formulario de creación, y súbalo a la raíz de su foro.',
	'CMS_PERMISSIONS' => 'Permisos',
	'CMS_PERMISSIONS_AUTH_EDIT_SET' => 'Ajuste las Permisos de edicíon',
	'CMS_PERMISSIONS_AUTH_EDIT' => 'Ajustar Permisos',
	'CMS_PERMISSIONS_AUTH_VIEW' => 'Ver Permisos',
	'CMS_PERMISSIONS_ROLES' => 'Roles de Permisos',
	'CMS_Global_Header' => 'Encabezado global',
	'CMS_GLOBAL_BLOCKS' => 'Bloques globales',
	'CMS_BREADCRUMBS' => 'Barra de ruta de acceso',
	'CMS_EDIT' => 'Editar',
	'CMS_DELETE' => 'Borrar',
	'CMS_PREVIEW' => 'Vista preliminar',
	'CMS_CONFIGURE_BLOCKS' => 'Configurar bloques',
	'CMS_PAGES_PERMISSIONS' => 'Permisos de página',
	'CMS_PAGES_PERMISSIONS_EXPLAIN' => 'En esta página puede configurar el nivel de usuario que se requiere para ver las páginas estándares. Para cada página puede escoger si se ven o no los bloques globales (esta característica de bloques globales puede ser activada en la <b>Configuración CMS</b>).',
	'CMS_Page' => 'Página',
	'CMS_ADS' => 'Publicidad &amp; patrocinadores',
	'CMS_OWNER' => 'Propietario',
	'CMS_SAVE_CHANGES' => 'Guardar cambios',
	'CMS_CHANGES_SAVED' => 'Cambios guardados',
	'CMS_BLOCK_SETTINGS' => 'Bloques Padre',
	'CMS_BLOCK_SETTINGS_TITLE' => 'Bloques Padre',
	'CMS_BLOCK_SETTINGS_TEXT' => 'En esta página...',
	'CMS_BLOCK_SETTINGS_INSTALL' => 'Crear Bloque Padre',
	'CMS_BLOCK_NAME' => 'Nombre',
	'CMS_BLOCK_PARENT' => 'Bloque padre',
	// MG CMS - END

// MG CMS MENU - BEGIN
	'CMS_MENU_PAGE' => 'Menú dinámico',
	'CMS_MENU_PAGE_EXPLAIN' => 'En esta página puede crear un menú modificado para que se vea en sus páginas del CMS como un bloque. Al crear una categoría o un enlace, puede utilizar claves de lenguaje para asignar nombres o para especificar su propio nombre. También puede escoger el nivel de permisos requeridos para cada enlace o la forma en que ha de ser abierto el enlace, en una nueva ventana del navegador o en el mismo.',

	'CMS_Menu_New_Menu' => 'Crear un nuevo bloque de menú',
	'CMS_Menu_New_cat' => 'Crear una nueva categoría',
	'CMS_Menu_New_link' => 'Crear un nuevo enlace',
	'CMS_Menu_Edit_menu_links_button' => 'Editar enlaces en este menú',
	'CMS_Menu_Edit_cat_button' => 'Editar categoría',
	'CMS_Menu_Edit_link_button' => 'Editar enlace',
	'CMS_Menu_Set_auth' => 'Permisos',
	'CMS_Menu_New_menu_name' => 'Nombre del menú',
	'CMS_Menu_New_cat_name' => 'Nombre de la categoría',
	'CMS_Menu_New_link_name' => 'Nombre para el enlace',
	'CMS_Menu_Default_link' => 'Enlace por defecto (<b>*</b> será ignorado)',
	'CMS_Menu_No_default_link' => 'Enlace no por defecto (Configuración personalizada)',
	'CMS_MENU_NO_DEFAULT_LINK_SELECT' => '-- No hay enlace por defecto (Configuración personalizada) --',
	'CMS_Menu_New_menu_des' => 'Descripción del menú',
	'CMS_Menu_New_cat_des' => 'Descripción de la categoría',
	'CMS_Menu_New_link_des' => 'Descripción del enlace',
	'CMS_Menu_Choose_cat' => 'Seleccione la categoría',
	'CMS_Menu_Choose_cat_desc' => 'Seleccione la categoría donde se situará el enlace.',
	'CMS_Menu_link_status' => 'Estado',
	'CMS_Menu_Icon' => 'Icono',
	'CMS_Menu_No_Icon' => 'Ningún icono',
	'CMS_Menu_Standard_Icon' => 'Icono estándar',
	'CMS_Menu_link_external' => 'Enlace externo',
	'CMS_Menu_New_link_name_key' => 'Clave de lenguaje (especificada en <b>lang_dyn_menu.php</b>)',
	'CMS_Menu_No_lang_key' => 'Ninguna variable de lenguaje (utilice un nombre específico)',
	'CMS_Menu_New_link_url' => 'URL para el enlace',
	'CMS_Menu_New_cat_link_url' => 'URL de la categoría (si no introduce una URL, pulsando en el enlace de la categoría puede expandir o contraer la categoría en cuestión)',
	'CMS_Menu_Update' => 'Menú actualización',

	'Click_Return_CMS_Menu' => 'Pulse %saquí%s, para volver al menú de administración',

	'Menu_created' => 'Menú creado correctamente.',
	'Cat_created' => 'Categoría creada correctamente.',
	'Link_created' => 'Enlace creado correctamente.',
	'Menu_updated' => 'Menú actualizado correctamente.',
	'Cat_updated' => 'Categoría actualizada correctamente.',
	'Link_updated' => 'Enlace actualizado correctamente.',
	'Menu_deleted' => 'Menú borrado correctamente.',
	'Cat_deleted' => 'Categoría borrada correctamente.',
	'Link_deleted' => 'Enlace borrado correctamente.',

	'CMS_Menu_Not_Exist' => 'Este menú no existe.',
	'CMS_Menu_Items_Not_Exist' => 'Este bloque del menú no está en ninguna categoría. Pulse en \'Añadir\' para añadirle uno.',
	'CMS_Menu_No_Cats_Exist' => 'Este bloque del menú no está en ninguna categoría. Antes de crear un enlace necesita crear una categoría.',
	'CMS_Menu_Item_Not_Exist' => 'Esta selección del menú no existe.',
	'CMS_Menu_Item_Add_Edit' => 'Añadir/Editar selección del menú',
// MG CMS MENU - END

// CMS - ADV - BEGIN
	'CMS_ADV' => 'CMS ADV',
	'CMS_LINKS' => 'Enlaces',
	'CMS_SETTINGS' => 'Configuraciones',
	'CMS_USERS' => 'CMS usuarios',
	'CMS_ADV_CUSTOM_PAGES' => 'Páginas de luz',
	'CMS_ADV_DEFAULT_TEMPLATE' => 'Por defecto',
	'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '-- Plantilla por defecto --',

	'BLOCK_MOVE' => 'Mover bloque',
	'TURN_ACTIVE' => 'Activar / Desactivar bloque',
	'TURN_BORDER' => 'Activar / Desactivar borde',
	'TURN_TITLEBAR' => 'Activar / Desactivar barra de título',
	'TURN_LOCAL' => 'Activar / Desactivar localización del título',
	'TURN_BACKGROUND' => 'Activar / Desactivar segundo plano',

	'BLOCKS_POSITION_SAVE' => 'Guardar posiciones de bloques',
	'BLOCKS_POSITION_UPDATED' => 'Posición de los bloques guardada correctamente',

	'INVALID_BLOCKS' => 'Posición incorrecta de bloques',

	'CMS_BLOCK_PAGE' => 'Añadir / Editar bloque',
	'CMS_BLOCK_CONFIG' => 'Configuración de Bloque',
	'CMS_BLOCK_CONFIG_EDIT' => 'Editar Configuración',
	'CMS_BLOCK_CONFIG_NO_VARS' => 'No hay variables de bloque',
	'CMS_AJAX_ENABLE' => 'Activar AJAX',
	'CMS_AJAX_DISABLE' => 'Desactivar AJAX',
// CMS - ADV - END
// CMS - TIPS - BEGIN
    'CMS_TIP_TITLE' => 'Pagina CMS principal',
    'CMS_TIP_CUSTOM_PAGES' => 'Páginas personalizadas: Todas las Páginas creadas a mano, basadas en uno de los muchos Layouts disponibles.<br />Puede costumizar estas Páginas añadiendo, editando o borrando bloques y contenido.<br />Tambien puede asignar un nombre fisico a esta pagina ( si el servidor lo permite, puede crear por ejemplo una pagina <b>mipagina.php</b>).<br />En esta seccion, puede tambien costumizar permisos y permisos globales como la Barra de ruta de acceso y bloques globales.',
    'CMS_TIP_STANDARD_PAGES' => 'Páginas Standard: Paginas por defecto en IcyPhoenix.<br />Estas Páginas tienen un contenido ya definido, pero lo puede costumizar añadiendo bloques en las posiciones disponibles.<br />Tambien puede añadir Páginas, pero estas tienen que existir ya en su servidor.<br />En esta seccion, puede tambien costumizar permisos y permisos globales como la Barra de ruta de acceso y bloques globales.',
    'CMS_TIP_BLOCK_SETTINGS' => 'Un Bloque es una seccion o Widget, que puede añadir a cualquier pagina .<br />Antes de poder añadir un Bloque a una Pagina, tiene que crearlo en esta seccion.<br />Una vez el contenido del bloque ha sido creado y guardado, puede añadir el bloque a cualquier pagina.<br />Despues de ver creado el Bloque, tambien puede añadir a multiples Páginas, sin tener que duplicar el contenido del mismo otravez.',
    'CMS_TIP_GLOBAL_BLOCKS' => 'Bloques Globales pueden ser usados en cualquier pagina, sin tener que añadirlos a todas las Páginas<br />Para poder usar los Bloques Globales, tiene que asegurarse, que los Bloques Globales estan habilitados en los Ajustes Globales.',
	'CMS_TIP_AUTH' => 'Systema de Permisos para el CMS y plugins.',
    'CMS_TIP_CONFIG' => 'Configuracion CMS: Aqui puede hacer algunas ajustes basicos de la CMS.',
    'CMS_TIP_MENU' => 'Esta seccion le permite crear y controlar el Menu de Navigacion.<br />Puede craer varios Menus de navigacion, y despues podra añadirlos a cualquier pagina con el Bloque &quot;Menu Dinamico&quot;  (acuerdase de usar el ID correcto).<br />Tambien puede usar Imagenes y permissos especiales a cualquier Enlace y Categoria.',
    'CMS_TIP_ADS' => 'La seccion de Publicidad esta pensada para controlar cualquier tipo de Publicidad en Páginas y en algunas secciones (como Foros, Temas y Menu).<br />En esta seccion puede crear varios anuncios y despues decidir, como y donde seran mostrados (Si hay mas de un anuncio para la misma posicion, seran mostrados aleatoreamente).',
// CMS - TIPS - END


// CMS USERS
	'CMS_USERS_INDEX' => 'índice',                                                                                                                                                        
	'CMS_USERS_LAYOUTS' => 'Páginas',
	'CMS_USERS_MENU' => 'Menú',
	'CMS_USERS_MENU_UPPERCASE' => 'MENú',
	'CMS_USERS_PROFILE' => 'Perfil',
	'CMS_USERS_CONFIG' => 'Configuración',
	'CMS_USERS_CONFIG_TEXT' => 'Desde esta página puede editar las preferencias de las páginas y bloques CMS',
	'CMS_USERS_USERLIST' => 'Lista de Usuarios',
	'CMS_USERS_USERLIST_TEXT' => 'Lista de Usuarios CMS',
	'CMS_USERS_USERLIST_NEW' => 'Usuarios Inactivos',
	'CMS_USERS_B_GLOBAL' => 'Permitir a todos los usuarios usar este bloque',
	'CMS_USERS_URL' => 'URL',
	'CMS_USERS_ACCOUNT' => 'Tipo de cuenta',
	'CMS_USERS_PAGE_NUMBERS' => 'número de páginas',
	'CMS_USERS_LAST_UPDATE' => 'última actualización',

	'CMS_USER' => 'Nombre de Usuario',
	'CMS_AUTH' => 'Permisos',
	'CMS_AUTH_TEXT' => 'En esta página tienes permisos completos',
	'CMS_AUTH_XP' => 'Permisos especiales',
	'CMS_ROLE' => 'Rol',
	'CMS_ROLES' => 'Roles',
	'CMS_AUTH_ADD' => 'Añadir usuario',
	'CMS_SAVE' => 'Guardar',
	'CMS_NO_AUTH' => 'No ha especificado ningún permiso especial',
	'CMS_NO_ROLE' => 'No ha especificado ningún rol',
	
    'CMS_PERMISSIONS_ADMINS' => 'Permisos de Administrador',
	'CMS_PERMISSIONS_ADMINS_EXPLAIN' => 'Ver Permisos de Administrador',
	'CMS_PERMISSIONS_MODS' => 'Permisos de Moderador',
	'CMS_PERMISSIONS_MODS_EXPLAIN' => 'Ver Permisos de Moderador',
	'CMS_PERMISSIONS_CMS_USERS' => 'Permisos CMS para Usuarios',
	'CMS_PERMISSIONS_CMS_USERS_EXPLAIN' => 'Ver Permisos CMS para Usuarios',
	'CMS_PERMISSIONS_CMS_GROUPS' => 'Permisos CMS para Grupos',
	'CMS_PERMISSIONS_CMS_GROUPS_EXPLAIN' => 'Ver Permisos CMS de Grupos',
	'CMS_PERMISSIONS_PLUGINS_USERS' => 'Permisos de Plugins para Usuarios',
	'CMS_PERMISSIONS_PLUGINS_USERS_EXPLAIN' => 'Ver Permisos de Plugins para Usuarios',
	'CMS_PERMISSIONS_PLUGINS_GROUPS' => 'Permisos de Plugins para Grupos',
	'CMS_PERMISSIONS_PLUGINS_GROUPS_EXPLAIN' => 'Ver Permisos de Plugins para Grupos',
	'CMS_PERMISSIONS_USERS' => 'Permisos de Usuarios',
	'CMS_PERMISSIONS_USERS_EXPLAIN' => 'Ver permisos de Usuarios',
	'CMS_PERMISSIONS_GROUPS' => 'Permisos de Grupos',
	'CMS_PERMISSIONS_GROUPS_EXPLAIN' => 'Ver permisos de Grupos',

	'CMS_AUTH_ADMINS' => 'Administradores',
	'CMS_AUTH_ADMINS_EXPLAIN' => 'Permisos de Usuarios con nivel de Admin',
	'CMS_AUTH_MODS' => 'Moderadores',
	'CMS_AUTH_MODS_EXPLAIN' => 'Permisos de Moderadores',
	'CMS_AUTH_CMS_USERS' => 'Usuarios del CMS',
	'CMS_AUTH_CMS_USERS_EXPLAIN' => 'Permisos Globales de Usuarios del CMS',
	'CMS_AUTH_CMS_GROUPS' => 'Grupos de CMS',
	'CMS_AUTH_CMS_GROUPS_EXPLAIN' => 'Permisos Globales de Grupos del CMS',
	'CMS_AUTH_CMS_USERS_LOCAL' => 'Usuarios CMS [Local]',
	'CMS_AUTH_CMS_USERS_LOCAL_EXPLAIN' => 'Permisos especificos para Usuarios',
	'CMS_AUTH_CMS_GROUPS_LOCAL' => 'Grupos del CMS [Local]',
	'CMS_AUTH_CMS_GROUPS_LOCAL_EXPLAIN' => 'Permisos especificos para Grupos',
	'CMS_AUTH_PLUGINS_USERS' => 'Usuarios de PLugins',
	'CMS_AUTH_PLUGINS_USERS_EXPLAIN' => 'Permisos Globales de Usuarios para Plugins',
	'CMS_AUTH_PLUGINS_GROUPS' => 'Grupos de Plugins',
	'CMS_AUTH_PLUGINS_GROUPS_EXPLAIN' => 'Permisos Globales de Grupos para Plugins',
	'CMS_AUTH_USERS' => 'Usuarios',
	'CMS_AUTH_USERS_EXPLAIN' => 'Permisos Globales de usuarios',
	'CMS_AUTH_GROUPS' => 'Grupos',
	'CMS_AUTH_GROUPS_EXPLAIN' => 'Permisos Globales de Grupos',

	'CMS_AUTH_CMS_USERS_GROUPS' => 'CMS',
	'CMS_AUTH_CMS_USERS_GROUPS_EXPLAIN' => 'Permisos CMS de Usuarios y Grupos',
	'CMS_AUTH_CMS_USERS_GROUPS_LOCAL' => 'CMS [Local]',
	'CMS_AUTH_CMS_USERS_GROUPS_LOCAL_EXPLAIN' => 'Permisos CMS especificos de Usuarios y Grupos',
	'CMS_AUTH_PLUGINS_USERS_GROUPS' => 'Plugins',
	'CMS_AUTH_PLUGINS_USERS_GROUPS_EXPLAIN' => 'Permisos Plugins de Usuarios y Grupos',
	'CMS_AUTH_USERS_GROUPS' => 'Global',
	'CMS_AUTH_USERS_GROUPS_EXPLAIN' => 'Permisos Globales de Usuarios y Grupos',

	'CMS_USERS_CMS_NEW' => 'Crea tu página',
	'CMS_USERS_CMS_EDIT' => 'Editar configuración',

	'CMS_USERS_NO_LAYOUT' => 'La página que ha seleccionado no existe',
	
	// CMS AJAX
	'COPY_LAYOUT' => 'Copiar Pagina',

	'AJAX_ERROR_WRONG_BLOCKS_LOCATION' => 'Por lo menos 1 bloque no tenia la posicion correcta. Bloques con posicion incorrecta, se movieron a otra posicion.',
	'AJAX_BLOCK_TITLE' => 'Titulo del Bloque',
	'AJAX_OPTION_ENABLED' => 'Habilitado',
	'AJAX_OPTION_BORDER' => 'Borde',
	'AJAX_OPTION_TITLE' => 'Barra de Titulo',
	'AJAX_OPTION_LOCAL' => 'Localizar Barra de Titulo',
	'AJAX_OPTION_BACKGROUND' => 'Fondo',
	'AJAX_OPTION_ENABLED_EXPLAIN' => 'Cliquea aqui para habilitar/deshabilitar el Bloque',
	'AJAX_OPTION_BORDER_EXPLAIN' => 'Cliquea aqui para habilitar/deshabilitar el Borde del Bloque',
	'AJAX_OPTION_TITLE_EXPLAIN' => 'Cliquea aqui para habilitar/deshabilitar el Titulo del Bloque',
	'AJAX_OPTION_LOCAL_EXPLAIN' => 'Cliquea aqui para habilitar/deshabilitar la Traduccion del Titulo (Si hay Traduccion disponible !!)',
	'AJAX_OPTION_BACKGROUND_EXPLAIN' => 'Cliquea aqui para habilitar/deshabilitar el fondo del Bloque',
	'AJAX_TIP_TITLE' => 'Cliquea para editar el Titulo del Bloque.',
	'AJAX_TIP_MOVE' => 'Mover el Bloque. Aprete el boton del Raton, y arrastre el Bloque arriba, abajo ó a cualquyier otra seccion de esta pagina, despues suelte el boton.',
	'AJAX_TIP_MOVE_ALL' => 'Mueva todos los bloques de arriba a otra posicion.',
	'AJAX_TIP_DELETE' => 'Cliquea para borrar este bloque.',
	'AJAX_TIP_ADD' => 'Añadir un bloque a esta seccion.',
	'AJAX_TIP_CHANGE_TYPE' => 'Cliquea para cambiar el contenido del bloque.',
	'AJAX_TIP_CHANGE_VIEW' => 'Cliquea para cambiar los permisos.',
	'AJAX_BUTTON_CHANGE' => 'Cambiar',
	'AJAX_BUTTON_CANCEL' => 'Cancelar',
	'AJAX_BUTTON_RESTORE' => 'Deshacer cambios',
	'AJAX_BUTTON_ADD' => 'Añadir Bloque',
	'AJAX_BUTTON_MOVE_ALL' => 'Mover todos los bloques',
	'AJAX_PARENT_BLOCK' => 'Bloque Padre:',
	'AJAX_PARENT_BLOCK_NONE' => 'N/A',
	'AJAX_CONFIRM_DELETE' => 'Esta seguro de querer borrar este Bloque? No se puede deshacer ese pasó.',
	'AJAX_REMOVED_BLOCK' => 'El Bloque ha sido borrado.',
	'AJAX_SAVING_CHANGES' => 'Guardando cambios...',
	'AJAX_SAVING_CHANGES_DONE' => 'Guardando cambios... hecho.',
	'AJAX_STATUS_ADDING' => 'Añadiendo bloque, espere por favor...',
	'AJAX_STATUS_ADDING_ERROR' => 'Error añadiendo bloque!',
	'AJAX_ERROR_CONNECTION' => 'Error: no puedo conectar al servidor.<br />Puede que haya un problema tecnico en el servidor, pruebe mas tarde otravez.',
	'AJAX_ERROR_PARSER' => 'Error: Respuesta invalida del servidor.',
	'AJAX_MANAGE_BLOCKS' => 'Editar bloques padre',
	'AJAX_MOVE_ALL_SELECT' => 'A donde mover los bloques:',
	'AJAX_SELECT_TYPE' => 'Selecionar el tipo de bloque',
	'AJAX_BLOCK_TYPE' => 'Tipo de Bloque:',
	'AJAX_SELECT_TYPE_FILE' => 'Archivo',
	'AJAX_SELECT_TYPE_HTML' => 'Codigo HTML',
	'AJAX_SELECT_TYPE_BBCODE' => 'Texto con BBcode',
	'AJAX_BLOCK_CONTENT' => 'Contenido del bloque:',
	'AJAX_VIEWED_BY' => 'Visto por',
	'AJAX_USERGROUPS' => 'Grupos de Usuario',
	'AJAX_USERGROUPS_ALL' => 'Todos',
	'AJAX_USERGROUPS_EDIT' => 'Editar la lista de Grupos de Usuario',
	'AJAX_BLOCK_USED' => 'Este Bloque se usa en los siguientes paginas:',
	'AJAX_BLOCK_USED_NONE' => 'Este bloque no se esta usando en ninguna pagina.',
	'AJAX_BLOCK_USED_DELETE' => 'Borrar',
	'AJAX_BLOCK_USED_LAYOUT' => 'Layout:',
	'AJAX_BLOCK_USED_LAYOUT_SPECIAL' => 'Pagína:',
	'AJAX_BLOCK_USED_LAYOUT_GLOBAL' => 'Global:',
	'AJAX_BLOCK_USED_CLICK' => 'Cliquea para editar este Layout.',
	'AJAX_EDIT_BLOCK_SETTINGS' => 'Editar Ajustes',
	'AJAX_EDIT_BLOCK_SETTINGS_TIP' => 'Cliquea "Editar Ajustes" para cambiar los ajustes.',
	'AJAX_EDIT_BLOCK_SETTINGS_ALT' => 'Editar Bloque Padre',
	'AJAX_BLOCK_NOT_FOUND' => 'No se encontro el Bloque.',


	'AUTH' => array(
		'cms_view' => 'Acceso CMS',
		'cms_edit' => 'Configuración CMS',
		'cms_l_add' => 'Añadir páginas',
		'cms_l_edit' => 'Editar páginas',
		'cms_l_delete' => 'Eliminar páginas',
		'cms_b_add' => 'Añadir bloques',
		'cms_b_edit' => 'Editar bloques',
		'cms_b_delete' => 'Eliminar bloques',
	),
	)
);

?>