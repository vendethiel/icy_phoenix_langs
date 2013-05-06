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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
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

//
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
// The FAQ items will appear on the FAQ page in the same order they are listed in this file


$faq[] = array("--","Acerca del inicio de cuenta (login) y registro");
$faq[] = array("&iquest;Por qué no puedo iniciar mi cuenta?", "&iquest;Ya se registró? Debe registrarse en el sistema antes de poder acceder a él. &iquest;Ha sido bloqueado en el foro? (si es así, le aparecerá un mensaje). Si le ha sucedido eso, envíe un mensaje al administrador del foro para saber la causa. Si se ha registrado y no ha sido bloqueado, compruebe que su nombre de usuario y contraseña coincidan, es el problema más común. Si está seguro de que están correctos los datos, envíe un mensaje al administrador, quizá el foro esté mal configurado y/o tenga fallos en la programación.");
$faq[] = array("&iquest;Por qué me tengo que registrar para todo?", "No está obligado a hacerlo, la decisión la toman los administradores y moderadores. Sin embargo, estar registrado le da muchas ventajas que como usuario invitado no disfrutaría, como tener su gráfico personalizado (avatar), mensajes privados, suscripción a grupos de usuarios, etc.... Sólo le tomará unos segundos, es muy recomendable.");
$faq[] = array("&iquest;Por qué mi sesión de usuario/a expira automáticamente?", "Si no activa la casilla <i>Ingresar automáticamente</i> cuando ingresa al foro, sus datos se guardan en una cookie que se elimina al salir de la página o tras cierto tiempo. Esto previene que su cuenta pueda ser usada por alguien más. Para que el sistema le reconozca automáticamente, basta con que active la casilla al ingresar. NO es recomendable si accede al foro desde un ordenador compartido (cibercafé, biblioteca, colegio, etc).");
$faq[] = array("&iquest;Cómo evito aparecer en las listas de usuarios/as conectados/as?", "En su perfil encontrará la opción <i>Ocultar mi estado de conexión</i>. Si activa esta opción aparecerá solo para los administradores, moderadores y para sí mismo; para los demás será un usuario oculto.");
$faq[] = array("¿He perdido mi contraseña!", "Calma, si su contraseña no puede ser recuperada puede desactivarla o cambiarla. Para hacer esto diríjase a la página de registro y pulse en <u>Olvidé mi contraseña</u>, siga las instrucciones, y estará dentro en muy poco tiempo");
$faq[] = array("¿Me he registrado y no puedo ingresar!", "Primeramente compruebe sus datos (usuario y contraseña). Si todo es correcto, hay dos posibles razones. Si el sistema de protección infantil (COPPA) está activado y cuando se registró eligió la opción <u>Soy menor de 13 años</u>, entonces tendrá que seguir algunas instrucciones que se le darán para activar la cuenta. En otros casos, el administrador pide que las cuentas se activen mediante un e-mail, así que revise su correo y confirme su suscripción. Algunos foros necesitan confirmación de registro. Si no sucede nada de esto, contacte con el administrador del foro.");
$faq[] = array("¿Hace un tiempo me registré, pero ahora no puedo ingresar!", "Hay varias razones posibles. Ingresó un nombre de usuario o contraseña incorrectos (verifique el mensaje que se le envió al registrarse). O quizá el administrador haya borrado su cuenta: esto es muy frecuente, pues si no ha escrito ningún mensaje en cierto tiempo el administrador puede borrar al usuario para que la base de datos no se sature de registros. Si es así, regístrese de nuevo y participe :)");


$faq[] = array("--","Preferencias de usuario y configuraciones");
$faq[] = array("&iquest;Cómo puedo cambiar mi configuración?", "Todos sus datos y configuraciones (si está registrado) están archivados en nuestra base de datos. Para modificarlos pulse en el enlace <u>Perfil</u>, generalmente se encuentra arriba de cada página.");
$faq[] = array("¿La hora de los foros no es correcta!", "Las horas son correctas, es posible que esté viendo las horas correspondientes a otra zona horaria. Si ese es el caso, ingrese en su perfil y defina su zona horaria de acuerdo a su ubicación (ej. Londres, París, New York, Sydney, etc.). Cambiando esto las horas deben aparecer de acuerdo a su zona y tiempo. Si no se ha registrado, es hora de hacerlo :)");
$faq[] = array("¿He cambiado la zona horaria en mi perfil, pero la hora sigue siendo incorrecta!", "Si está segur@ de que la zona horaria es correcta, es posible que se deba a los horarios de verano implementados por algunos países.");
$faq[] = array("¿Mi idioma no está en la lista!", "Esto se puede deber a que el administrador no ha instalado el paquete de su idioma para el foro, o nadie ha creado una traducción: (Si es así, siéntase libre de hacer una traducción (miles de personas se lo agradecerán); encuentre información sobre esto en la web de Icy Phoenix (Pulse en el enlace que se encuentra al final de la página)");
$faq[] = array("&iquest;Cómo puedo poner una imagen bajo mi nombre de usuario?", "Hay dos tipos de imágenes debajo de su nombre de usuario. La primera es el rango, que está asociada con el número de mensajes que ha escrito en el foro (generalmente son estrellas o bloques). La segunda es el avatar, que es un gráfico generalmente único y personal. El administrador decide si se pueden usar o no; si es posible, puede introducirlo en su perfil. En caso de que no exista esa opción, contacte con el administrador y pida que sea activada esa opción :)");
$faq[] = array("&iquest;Cómo puedo cambiar mi rango?", "No puede cambiar su rango directamente, ya que está asociado directamente al número de mensajes publicados o a su estado de moderador, administrador, u otros rangos especiales. Por favor, no abuse de escribir mensajes innecesariamente para incrementar su rango.");
$faq[] = array("Cuando pulso sobre el enlace de correo me pide que me registre.", "Para poder enviar correo a un usuario via formulario (si el administrador lo tiene activado) necesita estar registrado. Así se evitar SPAM o mensajes maliciosos de usuarios anónimos.");

$faq[] = array("--","Publicación de mensajes");
$faq[] = array("&iquest;Cómo puedo publicar un mensaje en el foro?", "Fácil. Regístrese como usuario del foro (pulsando en el enlace de registro, generalmente arriba de cada página). Tras registrarse, pulse en <i>Enviar nuevo mensaje</i>: se le presentará un panel con el que fácilmente publicará su mensaje :)");
$faq[] = array("&iquest;Cómo puedo editar o borrar un mensaje?", "Si no es administrador o moderador del foro, sólo puede borrar los mensajes que haya enviado usted mismo. Puede editar un mensaje pulsando en <i>editar</i>. Si alguien ya ha respondido a su mensaje, encontrará un pequeño texto en el suyo diciendo que ha sido modificado y las veces que lo ha hecho; no aparece si fue un moderador o el administrador el que lo editó (la mayoría de las veces dejan un mensaje aclaratorio).");
$faq[] = array("&iquest;Cómo puedo agregar una firma a mis mensajes?", "Primero debe crear una firma, lo que puede hacer desde su perfil. Una vez creada, active la opción <i>Agregar firma</i> cuando publique un mensaje. También puede hacer que todos sus mensajes tengan su firma, activando la opción en su perfil.");
$faq[] = array("&iquest;Cómo creo una encuesta?", "Crear una encuesta es fácil. Cuando inicie un nuevo tema verá la opción <i>Crear una encuesta</i>. Introduzca los datos de la encuesta, como título y opciones. Puede poner límite al número de participantes (0 es infinito)");
$faq[] = array("&iquest;Cómo edito o borro una encuesta?", "Si usted inició la encuesta puede editarla de la misma manera que un mensaje. Pero esto sólo es posible si la encuesta aún no tiene respuestas, pues, de tenerlas, sólo el administrador o moderadores podrán editarla o borrarla");
$faq[] = array("&iquest;Por qué no puedo acceder a un foro?", "Algunos foros pueden estar limitados a ciertos usuarios o grupos. Para verlos, leer, escribir, etc., podría necesitar una autorización especial que sólo el moderador del foro o el administrador del sitio pueden dar, así que debería contactar con ellos.");
$faq[] = array("&iquest;Por qué no puedo votar en encuestas?", "Para prevenir resultados trucados, sólo los usuarios registrados pueden votar en encuestas. Si se ha registrado pero no puede votar, es posible que no tenga autorización para votar en esa encuesta.");

$faq[] = array("--","Formateo de mensajes y tipos de temas");
$faq[] = array("&iquest;Qué es el código BBCode?", "BBCode es una implementación especial del HTML; la forma en que puede usarse es determinada por el administrador. Es muy similar al HTML: las etiquetas van entre corchetes [ y ] para mas información puede ver el manual de BBCode, el enlace aparece cada vez que va a publicar un mensaje.");
$faq[] = array("&iquest;Puedo usar HTML?", "Depende de si el administrador tenga habilitada la opción y de qué etiquetas HTML estén activadas, ya que muchas etiquetas HTML podrían dañar severamente la estructura del mensaje.");
$faq[] = array("&iquest;Qué son los emoticonos?", "Emoticonos son pequeños gráficos que pueden ser usados para expresar emociones. Aparecen introduciendo un pequeño código. Por ejemplo:  :) significa feliz, :( significa triste. La lista completa de emoticonos se despliega cuando va a escribir un mensaje.");
$faq[] = array("&iquest;Puedo publicar imágenes?", "Las imágenes pueden ser adheridas al mensaje insertándolas en el momento de redactarlo. No puede haber imágenes de sitios de correo, búsqueda o que requieran autentificación (Yahoo, Hotmail...).");
$faq[] = array("&iquest;Qué son los anuncios?", "Los anuncios contienen información importante para los usuarios.");
$faq[] = array("&iquest;Qué son las notas?", "Temas importantes, aparecen debajo de los anuncios y sólo en la primera página. Es información importante que debería leer :)");
$faq[] = array("&iquest;Qué son los temas cerrados o bloqueados?", "Los temas cerrados o bloqueados son temas en los que ya no se puede escribir por decisión del administrador o moderadores.");

$faq[] = array("--","Niveles de usuario/a y grupos");
$faq[] = array("&iquest;Qué son los administradores/as?", "Son personas que tienen asignado un alto nivel de control sobre el foro entero: permisos, moderación, y todo tipo de configuraciones.");
$faq[] = array("&iquest;Qué son los moderadores/as?", "Son personas que tienen el poder de editar o borrar foros, cerrarlos o abrirlos. Son designados por el administrador y tienen menos opciones que él.");
$faq[] = array("Qué son los grupos de usuarios/as?", "Son una de las formas en las que el administrador del foro puede agrupar usuarios. Un usuario puede pertenecer a varios grupos. Esto se hace con el fin de conceder permisos colectivos sobre el foro (como convertir a todo un grupo en moderadores).");
$faq[] = array("&iquest;Cómo puedo pertenecer a un grupo de usuarios/as?", "Pulse en grupos de usuarios y pida su inscripcion. Recibirá un correo si es aceptado. No todos los grupos son abiertos.");
$faq[] = array("&iquest;Cómo me convierto en el moderador/a de un grupo de usuarios/as?", "Sólo el administrador puede asignar ese permiso, contacte con él :)");

$faq[] = array("--","Mensajería privada");
$faq[] = array("¿No puedo enviar mensajes privados!", "Hay tres posibles razones: No está registrado o no ha ingresado, el administrador deshabilitó el sistema de mensajes privados, o deshabilitó para usted la mensajería.");
$faq[] = array("¿Quiero evitar mensajes privados no deseados!", "En el futuro será agregada la característica de ignorar mensajes; por ahora, envíe un mensaje al administrador si recibe mensajes no deseados :(.");
$faq[] = array("¿He recibido spam o correos maliciosos de alguien en este foro!", "Lo sentimos mucho, la característica de mandar correos tiene amplios conceptos de seguridad y privacidad. Envíe el correo al administrador, tal como venía, incluyendo cabeceras y demás. &Eacute;l tomará medidas.");

$faq[] = array("--","Generador de avatar");
$faq[] = array("&iquest;Qué es?", "El <strong>Generador de avatar</strong> es usado para generar avatares para este foro phpBB por los usuarios.");
$faq[] = array("&iquest;Dónde lo puedo encontrar?", "Los puede encontrar en su perfil en la sección de avatares");
$faq[] = array("&iquest;Cómo guardo mi avatar?", "Debe de haber un enlace debajo del avatar que se ha generado. El enlace dice <strong>Pulse aquí para añadir este avatar a su perfil</strong>. Una vez que pulse en él, verá un mensaje que le informara sobre el cambio.");

$faq[] = array("--","álbum de fotos");
$faq[] = array("&iquest;Cómo puedo acceder al álbum de fotos? ", "Basta con usar el enlace 'álbum de fotos' en el menú de navegación. Esto le llevará al directorio principal donde se muestran todos los álbumes públicos. También puede acceder a la galería personal de un usuario haciendo clic en el enlace 'Galerías personales de usuarios' debajo de la categoría pública.");
$faq[] = array("&iquest;Cómo puedo añadir una imagen a un álbum de fotos?", "Una vez que usted está en el directorio principal del álbum de fotos, seleccione una de las' categorías públicas' o 'Galerías personales de usuarios'. Ahora debe ver un botón que dice 'Subir imagen' en la parte superior y la parte inferior de la página. Haga clic en este botón y siga las instrucciones en la página siguiente.");
$faq[] = array("&iquest;Cuál es el tamaño máximo de archivo, máximo ancho y la máxima altura de la imagen permitido?", "Estos ajustes aparecen en 'Subir imagen'. El administrador fija el límite superior para el tamaño del archivo, define las extensiones de archivos permitidas y otras cosas para cargar imágenes en los álbumes.");
$faq[] = array("&iquest;Qué formato tiene que tener mi imagen?", "Estos ajustes aparecen en 'Subir imagen'. El administrador fija un límite superior para el tamaño del archivo, define las extensiones de archivos y otras cosas para cargar imágenes en los álbumes.");
$faq[] = array("Al subir mi imagen me aparece un mensaje de error!", "Vuelva a la página 'Subir imagen' y asegúrese de seguir todas las instrucciones que aparecen allí. El fichero que usted ha intentado subir puede ser más grande que el tamaño máximo de archivo permitido, puede estar tratando de subir una foto que no se ajustan a las dimensiones especificadas, puede estar tratando de cargar una foto en un formato no está disponible, o simplemente pueden haber olvidado que rellenar los campos necesarios para enviar correctamente la foto.");
$faq[] = array("He cometido un error en el título y/o descripción de mi imagen. &iquest;Qué puedo hacer?", "Al ver un álbum, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, usted encontrará el enlace 'Editar' debajo de cada miniatura que le permitirá modificar esta información en cualquier momento.");
$faq[] = array("&iquest;Cómo puedo borrar una foto?", "Al ver un álbum, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, usted encontrará el enlace 'Eliminar' debajo de cada miniatura que le permitirá eliminar cualquier imagen suya.");
$faq[] = array("Me gustaría saber si a la gente le gusta o no le gusta mi imagen. &iquest;Cómo puedo hacerlo?", "Al ver un álbum o una foto, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, encontrarás los enlaces' calificación 'y' comentarios' debajo de cada miniatura o imagen que le permiten hacer esto de un par de maneras en cualquier momento.");

$faq[] = array("--","Archivos adjuntos");
$faq[] = array("&iquest;Cómo puedo añadir un archivo adjunto?", "Puede agregar un adjunto cuando se publica un nuevo mensaje si el administrador se lo ha permitido. Debería ver 'Añadir adjunto' debajo de la zona donde se escribe el texto del mensaje. Púlselo y después haga clic en 'examinar' para que se abra un cuadro dialogo estándar de selección de archivos. Busque el archivo que desea adjuntar, selecciónelo y haga clic en OK, Abrir o doble clic como lo haría cuando usa el explorador de archivos en su ordenador. Si decide añadir un comentario en el campo comentario del archivo este comentario será usado como un enlace al archivo adjunto. Si no ha añadido un comentario se utilizará el nombre del archivo para enlazar con el archivo adjunto. Si el administrador lo ha permitido usted podrá subir varios adjuntos siguiendo el mismo procedimiento que se describe más arriba hasta llegar al máximo número de archivos adjuntos permitidos para cada mensaje.<br /><br />El administrador fija el límite de tamaño de archivo, define las extensiones de archivos permitidas y otras cosas para los archivos adjuntos en el foro. Tenga en cuenta que es su responsabilidad de que sus archivos adjuntos cumplan la legalidad vigente, las normas de uso del foro, y que pueden ser borrados sin previo aviso.<br /><br />Por favor tenga en cuenta que el propietario del foro, el webmaster, administrador o moderadores declinan toda responsabilidad por cualquier pérdida de datos.");
$faq[] = array("&iquest;Cómo puedo añadir un archivo adjunto después de haber publicado un mensaje?", "Para añadir un archivo adjunto después de haber publicado un mensaje deberá editar su mensaje y seguir los pasos anteriores. El nuevo archivo adjunto se agregará al mensaje editado al hacer clic en <i>Enviar</i>.");
$faq[] = array("&iquest;Cómo se elimina un archivo adjunto?", "Para borrar los archivos adjuntos deberá editar el mensaje y hacer clic en <i>Eliminar adjunto</i>, junto al adjunto que quiere borrar en la zona <i>Adjuntos agregados</i>. El archivo adjunto se elimina cuando se haga clic en <i>Enviar</i>.");
$faq[] = array("&iquest;Cómo puedo actualizar el comentario de un adjunto?", "Para actualizar el comentario de un adjunto deberá editar su mensaje, edite el texto en <i>Comentario del archivo</i> y haga clic en el botón <i>Actualizar comentario</i>, situado junto al archivo que desea comentar. El comentario del archivo se actualizará en el mensaje cuando haga clic en <i>Enviar</i>.");
$faq[] = array("&iquest;Por qué no veo el adjunto en mi mensaje?", "Probablemente el archivo o la extensión no están permitido en el foro, o un moderador o administrador lo han eliminado por no cumplir las normas de uso de la web.");
$faq[] = array("&iquest;Por qué no puedo agregar adjuntos?", "En algunos foros añadir adjuntos puede estar limitado a ciertos grupos de usuarios. Para agregar un adjunto podría necesitar una autorización especial, solo un moderador o administrador puede otorgar este permiso, póngase en contacto con ellos.");
$faq[] = array("Tengo los permisos necesarios, &iquest;porque no puedo agregar adjuntos?", "El administrador fija un límite máximo de tamaño del archivo, extensiones y otras cosas para los archivos adjuntos en el foro. Un administrador o moderador puede haber modificado o cancelado sus permisos, para adjuntar archivos en un foro específico. Debería obtener una explicación en el mensaje de error que aparece al tratar de agregar un archivo adjunto, si no, considere la posibilidad de contactar con el administrador o moderador.");
$faq[] = array("&iquest;Por qué no puedo borrar adjuntos?", "En algunos foros borrar adjuntos puede estar limitado a ciertos grupos de usuarios. Para borrar un adjunto podría necesitar una autorización especial, solo un moderador o administrador puede otorgar este permiso, póngase en contacto con ellos.");
$faq[] = array("&iquest;Por qué no puedo ver/bajar adjuntos?", "En algunos foros la visualización/descarga de los adjuntos puede estar limitado a ciertos grupos de usuarios. Para ver/bajar un adjunto podría necesitar una autorización especial, solo un moderador o administrador puede otorgar este permiso, póngase en contacto con ellos.");
$faq[] = array("&iquest;Con quien contacto sobre los adjuntos ilegales o posiblemente ilegales?", "Usted debe ponerse en contacto con el administrador de este foro. Si no lo encuentra en primer lugar debería contactar uno de los moderadores de los foros para preguntarle a quien se debe dirigir. Si aun así no obtiene respuesta debería ponerse en contacto con el propietario del dominio (hacer búsqueda whois) o, si este se está ejecutando en un servicio gratuito (ej. yahoo, free.fr, f2s.com, etc), con el departamento que gestiona el abuso de ese servicio. Tenga en cuenta que el equipo de Icy Phoenix no tiene absolutamente ningún control y no puede de ninguna manera ser considerado responsable de como, donde o quien usa este foro. Es absolutamente inútil contactar con el equipo de Icy Phoenix en relación a cualquier acto ilegal (cesar y desistir, responsabilidades, comentarios difamatorios, etc) que no esté directamente relacionado con el sitio web Icy Phoenix.com o al software de Icy Phoenix. Si lo hace al e-mail de equipo de Icy Phoenix acerca de cualquier utilización por un tercero de este software es posible que le contestemos o que no dependiendo del caso.");

$faq[] = array("--","Descargas");
$faq[] = array("&iquest;Dónde puedo encontrar las descargas?", "Links a las descargas están situados en el menu de navegación y en la navegación del portal. Directlink: [<a href=\"downloads.php\">Downloads</a>]");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_blue'] . "\" alt=\"\" title=\"\" />?", "No es posible la descarga. El tráfico total ajustado por el administrador para cada descarga o para la categoría ys se ha alcanzado este mes.");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_red'] . "\" alt=\"\" title=\"\" />?", "No es posible la descarga. Puede ser:<br />- La descarga está bloqueada por el administrador.<br />- El usuario no está logado y la descarga solo está permitida para usuarios registrados.<br />- El usuario no tiene suficiente tráfico para descargar el fichero.<br />- El administrador ha fijado un número mínimo de posteos y el usuario no los tiene\"t.<br />- El límite de tráfico para este fichero se ha superado.");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_grey'] . "\" alt=\"\" title=\"\" />?", "Fuente externa. La descarga comenzará desde un servidor externo. Esto será manejado como <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" />. El tráfico del usuario o el total no se decrementarán.");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_white'] . "\" alt=\"\" title=\"\" />?", "Como <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" /> el tráfico del usuario no se decrementará . Pero solo usuarios logados pueden descargar gratuitamente. El tráfico total se decrementará.");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_yellow'] . "\" alt=\"\" title=\"\" />?", "Descarga es posible con restricciones. La descarga es solo posible para usuarios registrados. El usuario debe logarse. El tamaño del fichero será restado de su tráfico y del tráfico total.");
$faq[] = array("&iquest;Qué significa <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" />?", "Descarga gratuita. La descarga no será restringida. Este fichero puede ser descargado por invitados. No es necesario estar logado. Tu tráfico no se decrementará, pero si el total.");
$faq[] = array("&iquest;Por qué no puedo descargar un fichero?", "Puede ser por varias razones. Mira bajo <img border=\"0\" src=\"" . $images['Dl_blue'] . "\" alt=\"\" title=\"\" /> y <img border=\"0\" src=\"" . $images['Dl_red'] . "\" alt=\"\" title=\"\" />.");
$faq[] = array("&iquest;Cómo y cuándo obtengo nuevo tráfico para mi cuenta?", "Después del primer login el usuario obtiene un timestamp. Cada primer día de mes, cuando el usuario entre a descargas, el tráfico será refrescado. Preguta a tu administrador la cantidad que obtendrás.");
$faq[] = array("Deseo aún descargar un fichero más, pero no me queda más tráfico", "En estos caso, pídeselo a tu administrador. Solo él puede decidir incrementar el tráfico de usuario antes de que la cuenta obtenga nueva cuota de forma automática el siguiente mes.");
$faq[] = array("&iquest;Cómo puedo calificar descargas?", "Después de cada descarga en la categoría o en la vista de detalle verás una sección para evaluar.<br />By pulsa en  \"Rate\" un usuario registrado puede evaluar una descarga desde 1 punto (muy mala) a 10 puntos (muy buena). Puedes evaluar una descarga una sola vez.");

$faq[] = array("--","Resúmenes");
$faq[] = array("&iquest;Qué son los resúmenes?", "Son correos que se envían periódicamente con el resumen de los posts hechos en el sitio. Están disponibles diaria o semanalmente.");
$faq[] = array("&iquest;Por qué podría desear un resumen?", "Hace la vida más fácil. No tienes que visitar el sitio explícitamente para ver que conversaciones están teniendo lugar. Solo con leer el resumen vemos lo que nos interesa y con un clic de ratón accederemos a él y comenzaremos nuestra participación. Puedes eliminar la suscripción en cualquier momento.");
$faq[] = array("&iquest;Cada cuánto tiempo se envía?", "Diaria o semanalmente. Los envíos semanales son procesados el domingo.");
$faq[] = array("&iquest;Cuándo se envían los resúmenes?", "Tu determinas la hora a la que deseas recibir el resumen. Se a cual fuere la hora que elijas, obtendrás siempre las últimas noticias de tal manera que se ajuste a tu estilo de vida.");
$faq[] = array("&iquest;Qué período de tiempo cubre el resumen?", "24 horas o  7 días, dependiendo de si seleccionaste resumen diario o semanal. Los mensajes más antiguos que esas fechas no se enviarán. Además, si lo deseas, puedes elegir no ver los mensajes desde tu último login si hiciste esa visita recientemente. Puedes incluso filtrar tus propios mensajes");
$faq[] = array("Supongamos que no deseo resúmenes de cada mensaje. &iquest;Puedo ser selectivo?", "Si. Puedes seleccionar el foro o foros que te interesen. Por defecto, obtendrás los mensajes de todos los foros a los que tengas acceso.");
$faq[] = array("&iquest;Qué formatos de correo están disponibles?", "Se pueden mandar correos en HTML o texto. A menos que tu programa de correo no maneje HTML (muy raro actualmente), te sugerimos usar este formato. Sinceramente, los resúmenes en formato texto parecen demasiado planos y difíciles de leer Esto es la naturaleza de los textos planos.");
$faq[] = array("&iquest;se envía el mensaje completo en el resumen?", "Por defecto, se envían los primeros 150 caracteres del mensaje, o puedes elegir no ver nada del mensaje y solo el título en su lugar. Puedes elegir la inclusión de los primeros 50, 100, 150, 300 o 600 caracteres o el texto completo del mensaje hasta 32.000 caracteres. Más allá de este tamaño, será trucado. Recomendamos mantener la longitud del mensaje por defecto porque si no, los resúmenes serán inmanejables. También tenemos noticias de que grandes resúmenes son rechazados por los ISP o pueden superar las cuotas de almacenamiento de los servidores. Un extracto no reduce los anchos de banda y es usualmente todo lo que se necesita. &iquest;Por qué? Porque cada mensaje tiene un enlace que te permitirá ir al tema de interés. .");
$faq[] = array("&iquest;Cómo puedo empezar?", "Pulsa en el enlace a resúmenes (Digests) en el bloque de enlaces de navegación o aquí: <a href=\"./digests.php\">Digests</a>.");
$faq[] = array("&iquest;Puedo cancelar la suscripción?", "¿Por supuesto!. Solo con ir a la misma página y pulsar  \"None\" for \"Type of Digest Wanted\". Entonces rellena el formulario. Tu suscripción finalizará de inmediato.");
$faq[] = array("&iquest;Los resúmenes están libres de publicidad?", "Por supuesto. No hay ningún molesto anuncio y nunca lo habrá.");
$faq[] = array("&iquest;Está mi privacidad protegida?", "Si. Tu resumen se envía a tí y a nadie más. A nadie más que a quíen tu nos digas en tu perfil. Piensa en el resumen como una edición especial de un períodico parametrizado solo para ti. Algo diferente a eso es otro tipo de resumen.");


$faq[] = array("--","Información de mensajes no leídos almacenados en base de datos (UPI2DB)");
$faq[] = array("&iquest;Cuál es la diferencia entre el sistema basado en  cookies usado por defecto y el sistema UP2DB?", "El sistema basado en cookies es el sistema por defecto de los foros phpBB2. Cuando un mensaje es leído, la información al respecto es almacenada en una cookie en tu ordenador, la cual incluye la información de que has leído el mensaje. La mayor desventaja de este sistema es que se pierden las informaciones sobre hilos marcados como leídos o no leídos al cerrar el explorador. El sistema UPI2DB no almacena información como cookies en tu ordenador, lo hace de forma separada en la base de datos.");
$faq[] = array("&iquest;Cúales son los pros y contras del sistema de cookies?", "<strong>Ventaja:</strong> Con grandes foros el sistema de cookies tiene una mayor velocidad de carga de páginas que el sistema UPI2DB, porque el sistema debe también cargar la información sobre los mensajes leídos desde la base de datos. Otra ventaja es que los datos se almacenarán varios meses (si no los borras del ordenador) y no estarán sujetos a borrados de archivos antiguos en la base de datos del sistema. Esto es interesante para usuarios que solo leen el foro cada 2 meses, por ejemplo. <br /><strong>Desventaja:</strong> La mayor desventaja es que todos los mensajes son marcados como leídos al cerrar el explotador. Otra desventaja es que los mensajes editados no se marcan de nuevo como no leídos y por ello no fijarás atención en ellos.");
$faq[] = array("&iquest;Cuáles son los pros y contras del sistema UPI2DB?", "<strong>Ventaja:</strong> Mensajes no leídos quedan como no leídos si se cierra el explorador. Si se cierra el explorador, no tendrás que buscar los elementos que no hayas leído porque el sistema te los señala. Los posts se pueden también marcar como leídos durante un perído de " . $unread_days . " con el sistema UPI2DB. Los foros que no te interesen pueden ser marcador como \"permanentemente leídos\", hasta que cambies esa opción. Contribuciones editadas se marcan como no leídas con la nota \"Editado\" y además tienen otro color diferente de los mensajes normales no leídos. Una nueva función de búsqueda permite buscar solo entre los mensajes no leídos o editados. Cuando el administrador activa la visualización de contribuciones editadas en la parte superior del los posts, esas contribuciones editadas se marcarán en la primera línea del mensaje.<br /><strong>Desventajas:</strong> Para foros muy grandes con muchos mensajes y usuarios, puede tardar más en cargar la página. La información de si una contribución ha sido leída está en la base de datos solo durante un determinado tiempo tras el cual es marcada como leída. El período estándar es de 30 días, pero puede se modificado por el administrador.");
$faq[] = array("No puedo ver ningún parámetro en mi perfil donde seleccionar el uso de cookies o el sistema UPI2DB", "Si no ves las opciones para el sistema UPI2DB, el administrador ha activado o desactivado permanentemente el sistema. En ese caso, no tienes posibilidad de cambiar la opción.");
$faq[] = array("&iquest;Qué condiciones puede fijar el administrador?", "Por defecto, el sistema UPI2DB permite al administrador la opción de seleccionar cuantos posts debe haber posteado un usuario en el sistema para poder usar esta opción o desde hace cuanto tiempo se debe haber registrado para poder usarla.");
$faq[] = array("Siempre que intento, no puedo marcar notas o anuncios como leídos", "Notas y anuncios deben ser leídos, no pueden ser marcados como leídos y por ello no se pueden usar las funciones de: \"Marcar todos los foros/contribuciones como leídos\" o \"Mostrar contribuciones no leídas\"!");
$faq[] = array("Quiero marcar todos los mensajes de más de " . $unread_days . " días como \"permanentemente leídos\"!", "Esto es como ocurrirá y no puede ser cambiado. Tenemos que mantener el compromiso de hacer que el sistema no irá demasiado lento.");
$faq[] = array("&iquest;Como se puede marcar un foro como \"permanentemente leído\"?", "Solamente pulsa en el dibujo delante del nombre del foro. El dibujo debe cambiar.");
$faq[] = array("&iquest;Cómo puedo marcar un tema como \"permanentemente leído\"?", "Pulsa en el dibujo delante del nombre del hilo. El dibujo debería cambiar u el tema se moverá al último lugar en la lista. Alternativamente, puedes pulsar \"Tema marcado permanentemente como leído\" en la parte de abajo de la página.");
$faq[] = array("No puedo marcar notas y anuncios como  \"permanentemente leídos\"!", "Notas y anuncios no pueden ser marcados como \"permanentemente leídos\", porque podrías perder informaciones valiosas. ");
$faq[] = array("He marcado un foro como \"permanentemente leído\", pero, ¿aparecen nuevos mensajes!", "Cuando alguien contribuye con una nota o un anuncio, el foro marcado como \"permanentemente leído\" será ajustado de nuevo a su valor por defecto. Esto es importante para evitar que se pierdan importantes informaciones.");
$faq[] = array("&iquest;Cómo puedo marcar una información para encontrarla fácilmente más tarde?", "En cada contribución puedes encontrar un botón en el título que se puede usar para marcarla. Contribuciones más antiguas que " . $unread_days . " días o contribuciones que fueron escritas antes de tu fecha de registro en este foro no serán marcadas.");
$faq[] = array("&iquest;Cómo puedo fijar de nuevo un hilo leído como no leído?", "En cada mensaje hay un enlace al título del tema. Con este enlace se pueden marcar todos los posts enviados o editados después de él como nuevos o editados.");
$faq[] = array("&iquest;Por qué no puedo marcar algunos hilos?", "Hilos marcados como \"permanentemente leídos\" en un foro o lo que fue escrito antes de tu fecha de registro no pueden ser marcados. Contribuciones más antiguas de " . $unread_days . " días, tampoco pueden ser marcadas..");
$faq[] = array("&iquest;Los hilos marcados permanecen así para siempre?", "No, todas las marcas que pongas serán borradas automáticamente después de " . $del_mark . " días desde que se puso la marca.");
$faq[] = array("&iquest;Qué significa MAR?", "Es la abreviatura de \"Marcar todo leído\"");


$faq[] = array("--","Temas relacionados con phpBB");
$faq[] = array("&iquest;Quién escribió este tablón de anuncios?", "Este software (en su forma no modificada) es producido, liberado y con copyright de <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Se libera bajo Licencia Pública General GNU y puede ser libremente distribuido; ver enlace para más detalles.");
$faq[] = array("&iquest;Por qué no está disponible la funcionalidad X?", "Este software fue escrito y licenciado a través del grupo phpBB. Si tu crees que esta funcionalidad necesita ser incluida, entonces visita la web phpbb.com y mira lo que tiene que decir el grupo phpBB Group. Por favor, no escribir peticiones de funcionalidades en phpbb.com. El grupo usa sourceforge para manejar las nuevas funcionalidades. Por favor, lee cuidadosamente los foros y observa que mira que puede ya haberse tomado una decisión sobre la funcionalidad y entonces sigue el procedimiento allí indicado.");
$faq[] = array("&iquest;Con quién debo contactar por uso abusivo y/o asuntos legales relativos a esta web?", "Debes contactar con el administrador. Si no puedes encontrar quién es, deberías primero contactar con un moderador y preguntarle con quién debes contactar. Si no hay respuesta, debes contactar con el dueño del dominio o si está ejecutándose en uno gratuito (como yahoo, free.fr, f2s.com, etc.), con el departamento de gestión de uso abusivo o ilegal de ese servicio. Por favor, nota que el grupo phpBB Group no tiene control de ningún modo de cómo, dónde y por quién es usado. Es absolutamente inútil contactar con el grupo phpBB en relación con asuntos legales (cesar y desistir, responsable, comentarios difamatorios, etc) por que es una cuestión que no está directamente relacionada con el sitio web phpbb.com o con el software de phpBB. Si a pesar de todo lo comunica por correo al grupo phpBB no debe esperar una respuesta.");


$faq[] = array("--", "Sobre Icy Phoenix");
$faq[] = array("&iquest;Qué es Icy Phoenix?", "Icy Phoenix es un sistema de gestión de contenidos que permite al usuario crear una web dinámica con muchas características embebidas: foro, portal, páginas y bloques parametrizables, descargas, galería de fotos y mucho más.");
$faq[] = array("&iquest;Quién escribió el software?", "Este software está basado en phpBB el cual está liberado bajo una Licencia General Pública (GNU), así, Icy Phoenix debe estar liberado bajo el mismo tipo de licencia y esto significa que puede ser modificado y distribuido libremente. Aparte de los ficheros core phpBB, la mayoría de los ficheros han sido directamente codificados o modificados por Mighty Gorgon y el <a href=\"http://www.icyphoenix.com/\" target=\"_blank\">equipo de Icy Phoenix</a>. Una lista no exhaustiva de colaboradores a este proyecto se puede encontrar en: <a href=\"http://www.icyphoenix.com/credits.php\" target=\"_blank\">Icy Phoenix credits</a>.");



?>