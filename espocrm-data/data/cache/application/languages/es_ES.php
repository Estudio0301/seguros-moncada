<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Usuario',
      'action' => 'Acción',
      'createdAt' => 'Fecha',
      'userType' => 'Tipo de usuario',
      'target' => 'Entidad objetivo',
      'targetType' => 'Tipo de objetivo',
      'authToken' => 'Token de autenticación',
      'ipAddress' => 'Dirección IP',
      'authLogRecord' => 'Entrada del registro de autenticación'
    ],
    'links' => [
      'authToken' => 'Token de autenticación',
      'authLogRecord' => 'Entrada del registro de autenticación',
      'user' => 'Usuario',
      'target' => 'Objetivo'
    ],
    'presetFilters' => [
      'onlyMy' => 'Solo míos'
    ],
    'options' => [
      'action' => [
        'read' => 'Leer',
        'update' => 'Guardar',
        'delete' => 'Eliminar',
        'create' => 'Crear'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Crear dirección de país',
      'Populate' => 'Rellenar'
    ],
    'fields' => [
      'code' => 'Código',
      'isPreferred' => '¿Es preferido?'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Los países preferidos aparecen primero en la lista de selección.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'Se eliminarán todos los países existentes y se creará la lista de países predeterminada. No será posible revertir la operación.

¿Está seguro?'
    ],
    'strings' => [
      'populateDefaults' => 'Rellenar con la lista de países predeterminada'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correos',
      'Messaging' => 'Mensajería',
      'Data' => 'Datos',
      'Misc' => 'Varios',
      'Setup' => 'Configuración',
      'Customization' => 'Personalizaciones',
      'Available Fields' => 'Campos disponibles',
      'Layout' => 'Diseño',
      'Entity Manager' => 'Entidades',
      'Add Panel' => 'Añadir Panel',
      'Add Field' => 'Añadir Campo',
      'Settings' => 'Ajustes',
      'Scheduled Jobs' => 'Tareas programadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Limpiar caché',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Portal' => 'Portales',
      'Portals' => 'Portales',
      'Portal Roles' => 'Roles del portal',
      'Portal Users' => 'Usuarios del portal',
      'API Users' => 'Usuarios de API',
      'Outbound Emails' => 'Correos salientes',
      'Group Email Accounts' => 'Cuentas de correo grupales',
      'Personal Email Accounts' => 'Cuentas de correo personales',
      'Inbound Emails' => 'Correos entrantes',
      'Email Templates' => 'Plantillas de correo',
      'Import' => 'Importar',
      'Layout Manager' => 'Diseño',
      'User Interface' => 'Interfaz de usuario',
      'Auth Tokens' => 'Tokens',
      'Auth Log' => 'Registros de autenticación',
      'App Log' => 'Registro de la aplicación',
      'App Secrets' => 'Secretos de la aplicación',
      'Authentication' => 'Autenticación',
      'Currency' => 'Moneda',
      'Integrations' => 'Integración',
      'Extensions' => 'Extensiones',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Plantilla de escritorio',
      'Upload' => 'Subir',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Actualizando',
      'Upgraded successfully' => 'Actualización exitosa',
      'Installed successfully' => 'Instalado de forma exitosa',
      'Ready for upgrade' => 'Listo para actualizar',
      'Run Upgrade' => 'Ejecutar actualización',
      'Install' => 'Instalar',
      'Ready for installation' => 'Listo para instalación',
      'Uninstalling...' => 'Desinstalando',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Crear entidad',
      'Edit Entity' => 'Editar Entidad',
      'Create Link' => 'Crear enlace',
      'Edit Link' => 'Editar Enlace',
      'Notifications' => 'Notificaciones',
      'Jobs' => 'Trabajos',
      'Job Settings' => 'Configuración de trabajos',
      'Reset to Default' => 'Aplicar a valores por defecto',
      'Email Filters' => 'Filtros de correo',
      'Action History' => 'Histórico',
      'Label Manager' => 'Etiquetas',
      'Template Manager' => 'Gestor de plantillas',
      'Lead Capture' => 'Captura de Posible cliente',
      'Attachments' => 'Adjuntos',
      'System Requirements' => 'Requerimientos del sistema',
      'PDF Templates' => 'Plantillas PDF',
      'PHP Settings' => 'Configuraciones PHP',
      'Database Settings' => 'Configuraciones de la Base de Datos',
      'Permissions' => 'Permisos',
      'Email Addresses' => 'Direcciones de correo',
      'Phone Numbers' => 'Números de teléfono',
      'Layout Sets' => 'Conjuntos de diseño',
      'Working Time Calendars' => 'Calendarios de tiempo de trabajo',
      'Group Email Folders' => 'Carpetas de correo grupales',
      'Authentication Providers' => 'Proveedores de autenticación',
      'Address Countries' => 'Dirección Países',
      'OAuth Providers' => 'Proveedores de OAuth',
      'Success' => 'Éxito',
      'Fail' => 'Falló',
      'Configuration Instructions' => 'Instrucciones de configuración',
      'Formula Sandbox' => 'Fórmula sandbox',
      'is recommended' => 'es recomendado',
      'extension is missing' => 'no se encuentra la extensión'
    ],
    'layouts' => [
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'Lista (pequeña)',
      'detailSmall' => 'Detalle (Pequeño)',
      'detailPortal' => 'Detalle (portal)',
      'detailSmallPortal' => 'Detalle (pequeño, portal)',
      'listSmallPortal' => 'Lusta (pequeña, portal)',
      'listPortal' => 'Lista (portal)',
      'relationshipsPortal' => 'Paneles de relaciones (Portal)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización masiva',
      'relationships' => 'Paneles de relaciones',
      'defaultSidePanel' => 'Campos del panel lateral',
      'bottomPanelsDetail' => 'Paneles inferiores',
      'bottomPanelsEdit' => 'Paneles inferiores (editar)',
      'bottomPanelsDetailSmall' => 'Paneles inferiores (detalle pequeño)',
      'bottomPanelsEditSmall' => 'Paneles inferiores (Editar pequeño)',
      'sidePanelsDetail' => 'Paneles laterales (detalle)',
      'sidePanelsEdit' => 'Paneles laterales (editar)',
      'sidePanelsDetailSmall' => 'Paneles laterales (detalle pequeño)',
      'sidePanelsEditSmall' => 'Paneles laterales (editar pequeño)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convertir posible cliente',
      'listForAccount' => 'Listado (por Cuentas)',
      'listForContact' => 'Lista (para contacto)'
    ],
    'fieldTypes' => [
      'base' => 'Base',
      'address' => 'Dirección',
      'array' => 'Lista ordenable',
      'foreign' => 'Clave foránea',
      'duration' => 'Duración',
      'password' => 'Contraseña',
      'personName' => 'Nombre',
      'autoincrement' => 'Incremental',
      'bool' => 'SI / NO',
      'currency' => 'Moneda',
      'currencyConverted' => 'Moneda (convertido)',
      'date' => 'Fecha',
      'datetime' => 'Fecha y hora',
      'datetimeOptional' => 'Fecha / Fecha-Hora',
      'email' => 'Correo',
      'enum' => 'Lista',
      'enumInt' => 'Lista de enteros',
      'enumFloat' => 'Lista de decimales',
      'float' => 'Decimal',
      'int' => 'Entero',
      'link' => 'Enlace',
      'linkMultiple' => 'Enlace múltiple',
      'linkParent' => 'Enlace Padre',
      'linkOne' => 'Enlace uno',
      'phone' => 'Teléfono',
      'text' => 'Área de texto simple',
      'url' => 'Url',
      'urlMultiple' => 'URL Múltiple',
      'varchar' => 'Texto',
      'file' => 'Archivo',
      'image' => 'Imagen',
      'multiEnum' => 'Lista múltiple',
      'attachmentMultiple' => 'Adjuntos múltiples',
      'rangeInt' => 'Rango de enteros',
      'rangeFloat' => 'Rango de decimales',
      'rangeCurrency' => 'Rango de moneda',
      'wysiwyg' => 'Área de texto con editor',
      'map' => 'Mapa',
      'number' => 'Número',
      'colorpicker' => 'Selector de color',
      'checklist' => 'Lista de verificación',
      'barcode' => 'Código de barras',
      'jsonArray' => 'Array JSON',
      'jsonObject' => 'Objeto JSON'
    ],
    'fields' => [
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'tooltipText' => 'Texto de la ayuda',
      'required' => 'Requerido',
      'default' => 'Por defecto',
      'maxLength' => 'Longitud máxima',
      'options' => 'Ajustes',
      'optionsReference' => 'Referencia de opciones',
      'after' => 'Después (campo)',
      'before' => 'Antes (campo)',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de vista previa',
      'listPreviewSize' => 'Vista previa del tamaño en la vista de lista',
      'noEmptyString' => 'No están permitidos los valores de cadenas vacías',
      'defaultType' => 'Tipo por defecto',
      'seeMoreDisabled' => 'Desactivar cortar texto',
      'cutHeight' => 'Altura de corte (px)',
      'entityList' => 'Lista de entidades',
      'isSorted' => '¿Se debe ordenar?',
      'audited' => 'Auditada',
      'trim' => 'Recortar',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura mínima (px)',
      'provider' => 'Proveedor',
      'typeList' => 'Tipo de lista',
      'rows' => 'Número máximo de filas',
      'lengthOfCut' => 'Longitud del corte',
      'sourceList' => 'Lista de tomas de contacto',
      'prefix' => 'Prefijo',
      'nextNumber' => 'Siguiente Número',
      'padLength' => 'Longitud del relleno',
      'disableFormatting' => 'Desactivar formateo',
      'dynamicLogicVisible' => 'Condiciones para hacer el campo visible',
      'dynamicLogicReadOnly' => 'Condiciones para hacer el campo solo lectura',
      'dynamicLogicRequired' => 'Condiciones para hacer el campo obligatorio',
      'dynamicLogicOptions' => 'Opciones condicionales',
      'dynamicLogicInvalid' => 'Condiciones que hacen que el campo sea inválido',
      'dynamicLogicReadOnlySaved' => 'Las condiciones de estado guardadas hacen que el campo sea de solo lectura',
      'probabilityMap' => 'Probabilidades de la etapa (%)',
      'notActualOptions' => 'Opciones no reales',
      'activeOptions' => 'Opciones activas',
      'readOnly' => 'Solo lectura',
      'readOnlyAfterCreate' => 'Sólo lectura después de crear',
      'preview' => 'Vista previa',
      'attachmentField' => 'Campo de adjuntos',
      'maxFileSize' => 'Tamaño máximo de archivo (MB)',
      'isPersonalData' => '¿Es un dato personal?',
      'useIframe' => 'Usar iframe',
      'useNumericFormat' => 'Usar formato numérico',
      'strip' => 'Banda',
      'minuteStep' => 'Paso de minutos',
      'inlineEditDisabled' => 'Desactivar edición en línea',
      'allowCustomOptions' => 'Permitir opciones personalizadas',
      'displayAsLabel' => 'Mostrar como etiqueta',
      'displayAsList' => 'Mostrar como lista',
      'labelType' => 'Tipo de etiqueta',
      'maxCount' => 'Cantidad máxima de items',
      'accept' => 'Aceptar',
      'viewMap' => 'Botón Ver mapa',
      'codeType' => 'Tipo de código',
      'lastChar' => 'Último personaje',
      'onlyDefaultCurrency' => 'Única moneda predeterminada',
      'decimal' => 'Decimal',
      'displayRawText' => 'Mostrar texto sin formato (sin markdown)',
      'conversionDisabled' => 'Deshabilitar conversión',
      'decimalPlaces' => 'Lugares decimales',
      'pattern' => 'Patrón',
      'globalRestrictions' => 'Restricciones globales',
      'copyToClipboard' => 'Botón copiar al portapapeles',
      'createButton' => 'Botón Crear',
      'autocompleteOnEmpty' => 'Autocompletar si la entrada está vacía',
      'relateOnImport' => 'Relación con la importación',
      'aclScope' => 'Alcance de ACL',
      'onlyAdmin' => 'Solo para administradores',
      'notStorable' => 'No almacenable'
    ],
    'strings' => [
      'rebuildRequired' => 'Se requiere reconstrucción'
    ],
    'messages' => [
      'cacheIsDisabled' => 'La caché está deshabilitada, la aplicación funcionará lentamente. Habilítela en [Configuración](#Admin/Configuración).',
      'formulaFunctions' => 'Se pueden encontrar más funciones en [documentación] ({documentationUrl}).',
      'rebuildRequired' => 'Necesita ejecutar la reconstrucción desde CLI.',
      'upgradeVersion' => 'EspoCRM se actualizará a la versión **{version}**. Tenga paciencia ya que esto puede llevar un tiempo.',
      'upgradeDone' => 'EspoCRM se ha actualizado a la versión **{version}**.',
      'upgradeBackup' => 'Recomendamos hacer una copia de seguridad de los archivos y datos de EspoCRM antes de actualizar.',
      'thousandSeparatorEqualsDecimalMark' => 'El símbolo de separador de miles no puede ser el mismo que el de punto decimal.',
      'userHasNoEmailAddress' => 'El usuario no tiene dirección de correo.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione el paquete para actualizar',
      'downloadUpgradePackage' => 'Descargue los paquetes de actualización [aquí]({url}).',
      'selectLayout' => 'Seleccione el diseño necesario en el menú de la izquierda y edítelo.',
      'selectExtensionPackage' => 'Seleccione el paquete de la extensión',
      'extensionInstalled' => 'La extensión {name} {version} ha sido instalada',
      'installExtension' => 'La extensión {name} {version} está lista para ser instalada.',
      'cronIsDisabled' => 'Cron está deshabilitado, la aplicación no funciona correctamente. Habilítelo en [Configuración](#Admin/Configuración).',
      'cronIsNotConfigured' => 'Los trabajos programados no se están ejecutando. Por lo tanto, los correos entrantes, las notificaciones y los recordatorios no funcionan. Siga las [instrucciones](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) para configurar el trabajo cron.',
      'newVersionIsAvailable' => 'La nueva versión de EspoCRM {latestVersion} está disponible. Siga las [instrucciones](https://www.espocrm.com/documentation/administration/upgrading/) para actualizar su instancia.',
      'newExtensionVersionIsAvailable' => 'La nueva versión {latestVersion} de {extensionName} está disponible.',
      'uninstallConfirmation' => '¿Seguro que quieres desinstalar la extensión?',
      'upgradeInfo' => 'Consulte la [documentación]({url}) sobre cómo actualizar su instancia de EspoCRM.',
      'upgradeRecommendation' => 'No se recomienda esta forma de actualización. Es mejor actualizar desde CLI.'
    ],
    'descriptions' => [
      'settings' => 'Ajustes generales del sistema.',
      'scheduledJob' => 'Trabajos que se ejecutan en segundo plano (CRON).',
      'jobs' => 'Los trabajos que ejecutan tareas en segundo plano.',
      'upgrade' => 'Actualiza EspoCRM.',
      'clearCache' => 'Limpia toda la memoria caché del sistema.',
      'rebuild' => 'Reconstruir el sistema y limpia la caché.',
      'users' => 'Gestión de usuarios.',
      'teams' => 'Gestión de equipos.',
      'roles' => 'Gestión de roles.',
      'portals' => 'Gestión de portales.',
      'portalRoles' => 'Roles para el portal.',
      'portalUsers' => 'Usuarios del portal.',
      'outboundEmails' => 'Ajustes para los correos del sistema y de envíos masivos.',
      'groupEmailAccounts' => 'Ajustes de cuentas de correo grupales. Ejemplo: casilla de soporte.',
      'personalEmailAccounts' => 'Ajustes de cuentas de correo personales de los usuarios.',
      'emailTemplates' => 'Plantillas para de correos salientes.',
      'import' => 'Importar datos desde CSV.',
      'layoutManager' => 'Personalizar diseños (listas, detalles, editar, buscar, actualización masiva).',
      'entityManager' => 'Crear y editar entidades personalizadas. Administrar campos y relaciones.',
      'userInterface' => 'Configurar interfaz de usuario: Logo, tema, menu, etc.',
      'authTokens' => 'Sesiones de usuarios activas. Direcciones IP y última fecha de acceso.',
      'authentication' => 'Ajustes de autenticación.',
      'currency' => 'Ajustes de moneda y tipos de cambio.',
      'extensions' => 'Instalar o desinstalar extensiones.',
      'integrations' => 'Integración con los servicios de terceros.',
      'notifications' => 'Ajustes de notificaciones del sistema y por correo.',
      'inboundEmails' => 'Ajustes para los correos entrantes.',
      'emailFilters' => 'Filtros para los correos entrantes.',
      'groupEmailFolders' => 'Carpetas de correo compartidas para equipos.',
      'actionHistory' => 'Registro de las acciones del usuario.',
      'labelManager' => 'Personaliza las etiquetas de las aplicaciones.',
      'templateManager' => 'Personalice las plantillas de mensajes.',
      'authLog' => 'Historial de acceso.',
      'appLog' => 'Registro de la aplicación.',
      'appSecrets' => 'Almacene información confidencial, como claves API, contraseñas y otros secretos.',
      'leadCapture' => 'Puntos finales de captura de clientes potenciales y formularios web.',
      'attachments' => 'Todos los archivos adjuntos almacenados en el sistema.',
      'systemRequirements' => 'Requerimientos del sistema para EspoCRM.',
      'apiUsers' => 'Usuarios separados para propósitos de integraciones.',
      'webhooks' => 'Administrar webhooks.',
      'authenticationProviders' => 'Proveedores de autenticación adicionales para portales.',
      'emailAddresses' => 'Todas las direcciones de correo almacenadas en el sistema.',
      'phoneNumbers' => 'Todos los números de teléfono almacenados en el sistema.',
      'dashboardTemplates' => 'Implemente paneles para los usuarios.',
      'layoutSets' => 'Colecciones de diseños que se pueden asignar a equipos y portales.',
      'workingTimeCalendars' => 'Horario de trabajo.',
      'jobsSettings' => 'Configuración del procesamiento de trabajos. Los trabajos se ejecutan en segundo plano.',
      'sms' => 'Configuración de SMS.',
      'pdfTemplates' => 'Plantillas para impresión en PDF.',
      'formulaSandbox' => 'Escribir y probar scripts de fórmulas.',
      'addressCountries' => 'Países disponibles para los campos de dirección.',
      'oAuthProviders' => 'Proveedores de OAuth para integraciones.'
    ],
    'keywords' => [
      'settings' => 'sistema',
      'userInterface' => 'interfaz de usuario, tema, pestañas, logotipo, tablero',
      'authentication' => 'contraseña,seguridad,ldap',
      'scheduledJob' => 'cron, trabajos',
      'integrations' => 'google, mapas, mapas de google',
      'authLog' => 'registro, historia',
      'authTokens' => 'historial, acceso, registro',
      'entityManager' => 'campos, relaciones, relaciones',
      'templateManager' => 'notificaciones',
      'jobs' => 'cron',
      'labelManager' => 'idioma,traducción',
      'appSecrets' => 'clave,claves,contraseña',
      'leadCapture' => 'formularios web'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Defecto',
        'x-small' => 'Muy Pequeño',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande'
      ],
      'labelType' => [
        'state' => 'Estado',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'Y',
      'or' => 'O',
      'not' => 'NO'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Versión de PHP',
      'requiredMysqlVersion' => 'Versión de MySQL',
      'requiredMariadbVersion' => 'Version de MariaDB',
      'requiredPostgresqlVersion' => 'Versión de PostgreSQL',
      'host' => 'Nombre de host',
      'dbname' => 'Nombre de la Base de Datos',
      'user' => 'Nombre de usuario',
      'writable' => 'Escribible',
      'readable' => 'Legible'
    ],
    'templates' => [
      'twoFactorCode' => 'Código 2FA',
      'accessInfo' => 'Información de acceso',
      'accessInfoPortal' => 'Información de acceso para portales',
      'assignment' => 'Asignación',
      'mention' => 'Mencionar',
      'noteEmailReceived' => 'Nota sobre el correo recibido',
      'notePost' => 'Nota sobre la publicación',
      'notePostNoParent' => 'Nota sobre la publicación (sin padre)',
      'noteStatus' => 'Nota sobre la actualización de estado',
      'passwordChangeLink' => 'Enlace de cambio de contraseña',
      'invitation' => 'Invitación',
      'cancellation' => 'Cancelación',
      'reminder' => 'Recordatorio'
    ],
    'tooltips' => [
      'tabUrl' => 'Puede comenzar con `#` para navegar a una página de la aplicación.',
      'tabUrlAclScope' => 'La pestaña estará disponible para los usuarios que tengan acceso al ámbito especificado.'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Crear usuarios de API'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Mensaje',
      'code' => 'Código',
      'level' => 'Nivel',
      'exceptionClass' => 'Clase de excepción',
      'file' => 'Archivo',
      'line' => 'Línea',
      'requestMethod' => 'Método de solicitud',
      'requestResourcePath' => 'Ruta de solicitud de recursos'
    ],
    'presetFilters' => [
      'errors' => 'Errores'
    ]
  ],
  'AppSecret' => [
    'labels' => [
      'Create AppSecret' => 'Crear secreto'
    ],
    'fields' => [
      'value' => 'Valor'
    ],
    'tooltips' => [
      'name' => 'Caracteres permitidos:
* `[a-z]`
* `[A-Z]`
* `[0-9]`
* `_`'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Rol',
      'related' => 'Relacionado',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'field' => 'Campo',
      'sourceId' => 'Origen ID',
      'storage' => 'Almacenamiento',
      'size' => 'Tamaño (bytes)',
      'isBeingUploaded' => 'Se está cargando'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Adjunto',
        'Inline Attachment' => 'Adjunto en linea',
        'Import File' => 'Importar archivos',
        'Export File' => 'Exportar archivo',
        'Mail Merge' => 'Unificación de correo',
        'Mass Pdf' => 'Pdf masivo'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Insertar documento'
    ],
    'presetFilters' => [
      'orphan' => 'Huérfano'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Nombre de usuario',
      'ipAddress' => 'Dirección IP',
      'requestTime' => 'Tiempo de la solicitud',
      'createdAt' => 'Solicitado en',
      'isDenied' => 'Es denegado',
      'denialReason' => 'Motivo de denegación',
      'portal' => 'Portal',
      'user' => 'Usuario',
      'authToken' => 'Token de autenticación creado',
      'requestUrl' => 'URL de la solicitud',
      'requestMethod' => 'Método de solicitud',
      'authTokenIsActive' => 'Token de autenticación está activo',
      'authenticationMethod' => 'Método de autenticación'
    ],
    'links' => [
      'authToken' => 'Token de autenticación creado',
      'user' => 'Usuario',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Historial de acciones'
    ],
    'presetFilters' => [
      'denied' => 'Denegado',
      'accepted' => 'Aceptada'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Credenciales no válidas',
        'WRONG_CODE' => 'Código incorrecto',
        'INACTIVE_USER' => 'Usuario inactivo',
        'IS_PORTAL_USER' => 'Usuario del portal',
        'IS_NOT_PORTAL_USER' => 'No es un usuario del portal',
        'USER_IS_NOT_IN_PORTAL' => 'El usuario no está relacionado con el portal',
        'IS_SYSTEM_USER' => '¿Es usuario del sistema?',
        'FORBIDDEN' => 'Prohibido'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Usuario',
      'ipAddress' => 'Dirección IP',
      'lastAccess' => 'Fecha del último acceso',
      'createdAt' => 'Fecha de acceso',
      'isActive' => 'Está activo',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Histórico'
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'inactive' => 'Inactivo'
    ],
    'labels' => [
      'Set Inactive' => 'Establecer Inactivo'
    ],
    'massActions' => [
      'setInactive' => 'Establecer Inactivo'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Método'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Crear proveedor'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'Dírham de los Emiratos Árabes Unidos',
      'AFN' => 'Afgano afgano',
      'ALL' => 'Lek albanés',
      'AMD' => 'Dram armenio',
      'ANG' => 'Florín de las Antillas Neerlandesas',
      'AOA' => 'Kwanza angoleño',
      'ARS' => 'Peso argentino',
      'AUD' => 'Dólar australiano',
      'AWG' => 'Florín de Aruba',
      'AZN' => 'Manat azerbaiyano',
      'BAM' => 'Marco convertible de Bosnia-Herzegovina',
      'BBD' => 'Dólar de Barbados',
      'BDT' => 'Taka de Bangladesh',
      'BGN' => 'Lev búlgaro',
      'BHD' => 'Dinar bahreiní',
      'BIF' => 'Franco burundés',
      'BMD' => 'Dólar de las Bermudas',
      'BND' => 'Dólar de Brunei',
      'BOB' => 'Boliviano de Bolivia',
      'BOV' => 'Mvdol boliviano',
      'BRL' => 'Real brasileño',
      'BSD' => 'Dólar de las Bahamas',
      'BTN' => 'Ngultrum butanés',
      'BWP' => 'Pula de Botswana',
      'BYN' => 'Rublo bielorruso',
      'BZD' => 'Dólar beliceño',
      'CAD' => 'Dolar canadiense',
      'CDF' => 'Franco congoleño',
      'CHE' => 'WIR Euro',
      'CHF' => 'Franco suizo',
      'CHW' => 'Franco WIR',
      'CLF' => 'Unidad de Cuenta Chilena (UF)',
      'CLP' => 'Peso chileno',
      'CNH' => 'Yuan chino (en alta mar)',
      'CNY' => 'Yuan chino',
      'COP' => 'Peso colombiano',
      'COU' => 'Unidad de valor real colombiano',
      'CRC' => 'Colón costarricense',
      'CUC' => 'Peso convertible cubano',
      'CUP' => 'Peso cubano',
      'CVE' => 'Escudo caboverdiano',
      'CZK' => 'Corona checa',
      'DJF' => 'Franco de Yibuti',
      'DKK' => 'Corona danesa',
      'DOP' => 'Peso dominicano',
      'DZD' => 'Dinar argelino',
      'EGP' => 'Libra egipcia',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Birr etíope',
      'EUR' => 'Euro',
      'FJD' => 'Dólar fiyiano',
      'FKP' => 'Libra de las Islas Malvinas',
      'GBP' => 'Libra británica',
      'GEL' => 'Lari georgiano',
      'GHS' => 'Cedi de Ghana',
      'GIP' => 'Libra gibraltareña',
      'GMD' => 'Dalasi de Gambia',
      'GNF' => 'Franco guineano',
      'GTQ' => 'Quetzal guatemalteco',
      'GYD' => 'Dólar de Guyana',
      'HKD' => 'Dolar de Hong Kong',
      'HNL' => 'Lempira hondureña',
      'HRK' => 'Kuna croata',
      'HTG' => 'Gourde haitiano',
      'HUF' => 'Florín húngaro',
      'IDR' => 'Rupia indonesia',
      'ILS' => 'Nuevo shekel israelí',
      'INR' => 'Rupia india',
      'IQD' => 'Dinar iraquí',
      'IRR' => 'Rial iraní',
      'ISK' => 'Corona islandesa',
      'JMD' => 'Dólar jamaiquino',
      'JOD' => 'Dinar jordano',
      'JPY' => 'Yen japonés',
      'KES' => 'Chelín keniano',
      'KGS' => 'Som kirguís',
      'KHR' => 'Riel camboyano',
      'KMF' => 'Franco comorano',
      'KPW' => 'Won norcoreano',
      'KRW' => 'Won surcoreano',
      'KWD' => 'Dinar kuwaití',
      'KYD' => 'Dólar de las Islas Caimán',
      'KZT' => 'Tenge kazajo',
      'LAK' => 'Kip de Laos',
      'LBP' => 'Libra libanesa',
      'LKR' => 'Rupia de Sri Lanka',
      'LRD' => 'Dólar liberiano',
      'LSL' => 'Loti de Lesoto',
      'LYD' => 'Dinar libio',
      'MAD' => 'Dirham marroquí',
      'MDL' => 'Leu moldavo',
      'MGA' => 'Ariary malgache',
      'MKD' => 'Denar macedonio',
      'MMK' => 'Kyat de Myanmar',
      'MNT' => 'Tugrik mongol',
      'MOP' => 'Pataca de Macao',
      'MRO' => 'Ouguiya mauritano',
      'MUR' => 'Rupia de Mauricio',
      'MWK' => 'Kwacha malauí',
      'MXN' => 'Peso mexicano',
      'MXV' => 'Unidad Mexicana de Inversiones',
      'MYR' => 'Ringgit malayo',
      'MZN' => 'Metical mozambiqueño',
      'NAD' => 'Dólar de Namibia',
      'NGN' => 'Naira nigeriana',
      'NIO' => 'Córdoba nicaragüense',
      'NOK' => 'Corona noruega',
      'NPR' => 'Rupia nepalí',
      'NZD' => 'Dolar de Nueva Zelanda',
      'OMR' => 'Rial omaní',
      'PAB' => 'Balboa panameño',
      'PEN' => 'Sol peruano',
      'PGK' => 'Kina de Papúa Nueva Guinea',
      'PHP' => 'Piso filipino',
      'PKR' => 'Rupia pakistaní',
      'PLN' => 'Zloty polaco',
      'PYG' => 'Guaraní paraguayo',
      'QAR' => 'Rial de Qatar',
      'RON' => 'Leu rumano',
      'RSD' => 'Dinar serbio',
      'RUB' => 'Rublo ruso',
      'RWF' => 'Franco ruandés',
      'SAR' => 'Riyal saudí',
      'SBD' => 'Dólar de las Islas Salomón',
      'SCR' => 'Rupia de Seychelles',
      'SDG' => 'Libra sudanesa',
      'SEK' => 'Corona sueca',
      'SGD' => 'Dolar de Singapur',
      'SHP' => 'Libra de Santa Elena',
      'SLL' => 'Sierra Leona Leona',
      'SOS' => 'Chelín somalí',
      'SRD' => 'Dólar surinamés',
      'SSP' => 'Libra sursudanesa',
      'STN' => 'Santo Tomé y Príncipe Dobra (2018)',
      'SYP' => 'Libra siria',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Colón salvadoreño',
      'THB' => 'Baht tailandés',
      'TJS' => 'Tayikistán Somoni',
      'TND' => 'Dinar tunecino',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Lira turca',
      'TTD' => 'Dólar de Trinidad y Tobago',
      'TWD' => 'Nuevo dólar taiwanés',
      'TZS' => 'Chelín de Tanzania',
      'UAH' => 'Grivna ucraniana',
      'UGX' => 'Chelín ugandés',
      'USD' => 'Dólar estadounidense',
      'USN' => 'Dólar estadounidense (día siguiente)',
      'UYI' => 'Peso uruguayo (unidades indexadas)',
      'UYU' => 'Peso uruguayo',
      'UZS' => 'Som uzbeko',
      'VEF' => 'Bolívar venezolano',
      'VND' => 'Dong vietnamita',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Tala de Samoa',
      'XAF' => 'Franco CFA de África Central',
      'XCD' => 'Dólar del Caribe Oriental',
      'XOF' => 'Franco CFA de África Occidental',
      'XPF' => 'Franco CFP',
      'YER' => 'Rial yemení',
      'ZAR' => 'Rand sudafricano',
      'ZMW' => 'Kwacha de Zambia',
      'ZWL' => 'Dólar de Zimbabwe'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Diseño',
      'append' => 'Agregar (no elimina las pestañas del usuario)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Crear plantilla',
      'Deploy to Users' => 'Implementar a los usuarios',
      'Deploy to Team' => 'Implementar en equipo'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Título',
      'dateFrom' => 'Fecha desde',
      'dateTo' => 'Fecha hasta',
      'autorefreshInterval' => 'Actualizar cada:',
      'displayRecords' => 'Mostrar Registros',
      'isDoubleHeight' => 'Altitud 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Qué mostrar',
      'users' => 'Usuarios',
      'entityType' => 'Tipo de entidad',
      'primaryFilter' => 'Filtro principal',
      'boolFilterList' => 'Filtros adicionales',
      'sortBy' => 'Ordenar por',
      'sortDirection' => 'Dirección del orden',
      'expandedLayout' => 'Diseño',
      'skipOwn' => 'No mostrar registros propios',
      'url' => 'URL',
      'dateFilter' => 'Filtro de fecha',
      'text' => 'Texto',
      'folder' => 'Carpeta',
      'includeShared' => 'Incluir compartido',
      'team' => 'Equipo',
      'futureDays' => 'Próximos X días',
      'useLastStage' => 'Agrupar por última etapa alcanzada'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Semana (orden del día)',
        'basicWeek' => 'Semana',
        'month' => 'Mes',
        'basicDay' => 'Día',
        'agendaDay' => 'Día (agenda)',
        'timeline' => 'Línea de tiempo'
      ],
      'sortDirection' => [
        'asc' => 'Ascendente',
        'desc' => 'Descendiendo'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Seleccione el tipo de entidad en las opciones de la caja.'
    ],
    'tooltips' => [
      'skipOwn' => 'Las acciones realizadas por su cuenta de usuario no se mostrarán.'
    ],
    'otherFields' => [
      'soft' => 'Color suave',
      'small' => 'Fuente pequeña'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Campo'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Es igual',
        'notEquals' => 'No es igual',
        'greaterThan' => 'Es mayor que',
        'lessThan' => 'Es menor que',
        'greaterThanOrEquals' => 'Es mayor o igual que',
        'lessThanOrEquals' => 'Es menor o igual que',
        'in' => 'Está en',
        'notIn' => 'No está en',
        'inPast' => 'Es antes de hoy',
        'inFuture' => 'Es después de hoy',
        'isToday' => 'Es hoy',
        'isTrue' => 'Es verdadero',
        'isFalse' => 'Es falso',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No está vacío',
        'contains' => 'Contiene',
        'notContains' => 'No Contiene',
        'has' => 'Contiene',
        'notHas' => 'No Contiene',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina con',
        'matches' => 'Coincidencias (expresiones regulares)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Asunto',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateSent' => 'Fecha de envío',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'CCO',
      'replyTo' => 'Responder a',
      'replyToString' => 'Responder a (string)',
      'personStringData' => 'Datos de cadena de personas',
      'isHtml' => 'HTML',
      'body' => 'Cuerpo',
      'bodyPlain' => 'Cuerpo (plano)',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una plantilla',
      'fromEmailAddress' => 'De dirección (enlace)',
      'emailAddress' => 'Dirección de correo',
      'deliveryDate' => 'Fecha de entrega',
      'account' => 'Cuenta',
      'users' => 'Usuarios',
      'replied' => 'Es una respuesta a:',
      'replies' => 'Respuestas',
      'isRead' => 'Es leído',
      'isNotRead' => 'No leído',
      'isImportant' => 'Es importante',
      'isReplied' => 'Tiene respuesta',
      'isNotReplied' => 'No se respondieron',
      'isUsers' => 'Es del usuario',
      'isUsersSent' => '¿Es envío del usuario?',
      'inTrash' => 'En papelera',
      'inArchive' => 'En archivo',
      'folder' => 'Carpeta',
      'inboundEmails' => 'Cuentas grupales',
      'emailAccounts' => 'Cuentas personales',
      'hasAttachment' => 'Tiene adjunto',
      'assignedUsers' => 'Usuarios asignados',
      'sentBy' => 'Enviado por',
      'toEmailAddresses' => 'A direcciones de correo',
      'ccEmailAddresses' => 'Correos CC',
      'bccEmailAddresses' => 'Direcciones de correo CCO',
      'replyToEmailAddresses' => 'Direcciones de correo de respuesta',
      'messageId' => 'ID del mensaje',
      'messageIdInternal' => 'ID del mensaje (interno)',
      'folderId' => 'ID de carpeta',
      'folderString' => 'Carpeta',
      'fromName' => 'De Nombre',
      'fromString' => 'De cadena',
      'fromAddress' => 'De (email)',
      'replyToName' => 'Responder a nombre',
      'replyToAddress' => 'Responder a la dirección',
      'isSystem' => '¿Es sistema?',
      'icsContents' => 'Contenido del ICS',
      'icsEventData' => 'Datos de eventos del ICS',
      'icsEventUid' => 'UID del evento ICS',
      'createdEvent' => 'Evento creado',
      'event' => 'Evento',
      'icsEventDateStart' => 'Fecha de inicio del evento ICS',
      'groupFolder' => 'Carpeta de grupo',
      'groupStatusFolder' => 'Carpeta de estado del grupo',
      'sendAt' => 'Enviar a',
      'tasks' => 'Tareas'
    ],
    'links' => [
      'replied' => 'Es una respuesta a:',
      'replies' => 'Respuestas',
      'inboundEmails' => 'Cuentas grupales',
      'emailAccounts' => 'Cuentas personales',
      'assignedUsers' => 'Usuarios asignados',
      'sentBy' => 'Enviado por',
      'attachments' => 'Adjuntos',
      'fromEmailAddress' => 'De correo',
      'toEmailAddresses' => 'A direcciones de correo',
      'ccEmailAddresses' => 'Direcciones de correo CC',
      'bccEmailAddresses' => 'Direcciones de correo CCO',
      'replyToEmailAddresses' => 'Direcciones de correo de respuesta',
      'createdEvent' => 'Evento creado',
      'groupFolder' => 'Carpeta de grupo'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Borrador',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Importado',
        'Received' => 'Recibido',
        'Failed' => 'Falló'
      ],
      'groupStatusFolder' => [
        'Archive' => 'Archivo',
        'Trash' => 'Papelera'
      ]
    ],
    'labels' => [
      'Create Email' => 'Nuevo correo archivado',
      'Archive Email' => 'Nuevo correo archivado',
      'Import EML' => 'Importar EML',
      'Compose' => 'Nuevo',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a todos',
      'Forward' => 'Reenviar',
      'Insert Field' => 'Insertar campo',
      'Original message' => 'Mensaje original',
      'Forwarded message' => 'Mensaje reenviado',
      'Email Accounts' => 'Ir a cuentas de correo personales',
      'Inbound Emails' => 'Ir a cuentas de correo grupales',
      'Email Templates' => 'Plantillas de correo',
      'Send Test Email' => 'Enviar correo de prueba',
      'Send' => 'Enviar',
      'Email Address' => 'Dirección de correo',
      'Mark Read' => 'Marcar como leído',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Guardar borrador',
      'Mark all as read' => 'Marcar todos como leídos',
      'Show Plain Text' => 'Ver en texto plano',
      'Mark as Important' => 'Marcar como importante',
      'Unmark Importance' => 'Marcar como No importante',
      'Move to Trash' => 'Mover a la papelera',
      'Retrieve from Trash' => 'Recuperar de la papelera',
      'Move to Folder' => 'Mover a la carpeta',
      'Moved to Archive' => 'Movido al archivo',
      'No Records Moved' => 'No se movieron registros',
      'Filters' => 'Filtros',
      'Folders' => 'Ir a carpetas de correo',
      'Group Folders' => 'Carpetas de grupo',
      'No Subject' => 'Sin asunto',
      'View Users' => 'Ver usuarios',
      'Event' => 'Evento',
      'View Attachments' => 'Ver archivos adjuntos',
      'Moved to Trash' => 'Movido a la papelera',
      'Retrieved from Trash' => 'Recuperado de la papelera',
      'Schedule Send' => 'Programar envío',
      'Create Lead' => 'Crear posible cliente',
      'Create Contact' => 'Crear contacto',
      'Add to Contact' => 'Agregar a contacto',
      'Add to Lead' => 'Agregar a posible cliente',
      'Create Task' => 'Crear tarea',
      'Create Case' => 'Crear ticket'
    ],
    'strings' => [
      'sendingFailed' => 'Error al enviar el correo',
      'group' => 'Grupo'
    ],
    'messages' => [
      'confirmSend' => '¿Enviar el correo?',
      'couldNotSentScheduledEmail' => 'No se pudo enviar el [correo]({link}) programado',
      'notEditAccess' => 'Sin acceso de edición al correo.',
      'groupFolderNoAccess' => 'Sin acceso a la carpeta del grupo.',
      'groupMoveOutNoEditAccess' => 'No se puede sacar de la carpeta del grupo. No se puede editar el correo.',
      'groupMoveToNoEditAccess' => 'No se puede acceder a la carpeta del grupo. No se puede editar el correo.',
      'groupMoveToTrashNoEditAccess' => 'No se puede mover el correo de la carpeta de grupo a la papelera. No se puede editar el correo.',
      'groupMoveToArchiveNoEditAccess' => 'No se puede mover de la carpeta de grupo al archivo. No se puede editar el correo.',
      'alreadyImported' => 'El [correo]({link}) ya existe en el sistema.',
      'invalidCredentials' => 'Credenciales inválidas.',
      'unknownError' => 'Error desconocido.',
      'recipientAddressRejected' => 'Dirección del destinatario rechazada.',
      'noSmtpSetup' => 'SMTP no está configurado: {link}',
      'testEmailSent' => 'El correo de prueba ha sido enviado.',
      'emailSent' => 'El correo ha sido enviado',
      'savedAsDraft' => 'Guardado como borrador',
      'sendConfirm' => '¿Enviar el correo?',
      'removeSelectedRecordsConfirmation' => '¿Está seguro de que desea eliminar los correos seleccionados?

También se eliminarán para otros usuarios.',
      'removeRecordConfirmation' => '¿Estás seguro de que deseas eliminar el correo?

También se eliminará para otros usuarios.',
      'confirmInsertTemplate' => 'El cuerpo del correo se perderá. ¿Seguro que quieres insertar la plantilla?'
    ],
    'presetFilters' => [
      'sent' => 'Enviados',
      'archived' => 'Importado',
      'inbox' => 'Bandeja de entrada',
      'drafts' => 'Borradores',
      'trash' => 'Papelera',
      'archive' => 'Archivo',
      'important' => 'Importante'
    ],
    'actions' => [
      'moveToArchive' => 'Archivo'
    ],
    'massActions' => [
      'markAsRead' => 'Marcar como leído',
      'markAsNotRead' => 'Marcar como No leído',
      'markAsImportant' => 'Marcar como importante',
      'markAsNotImportant' => 'Marcar como No importante',
      'moveToTrash' => 'Mover a la papelera',
      'moveToFolder' => 'Mover a la carpeta',
      'moveToArchive' => 'Archivo',
      'retrieveFromTrash' => 'Recuperar de la papelera'
    ],
    'otherFields' => [
      'file' => 'Archivo'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Nombre de la cuenta',
      'status' => 'Estado',
      'host' => 'Servidor',
      'username' => 'Nombre de usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas sincronizadas',
      'security' => 'Seguridad',
      'fetchSince' => 'Traer correos desde',
      'emailAddress' => 'Dirección de correo',
      'sentFolder' => 'Carpeta de enviados',
      'storeSentEmails' => 'Almacenar correos enviados',
      'keepFetchedEmailsUnread' => 'Mantener los correos que se han obtenido sin leer',
      'emailFolder' => 'Poner en la carpeta',
      'connectedAt' => 'Conectado en',
      'useImap' => 'Obtener correos',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Autentificación SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpAuthMechanism' => 'Mecanismo de autenticación SMTP',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Correos'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'Entrar',
        'crammd5' => 'RAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Crear cuenta pesonal',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Probar conexión',
      'Send Test Email' => 'Enviar correo de prueba',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Activo'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'connectionIsOk' => 'Conexión correcta',
      'imapNotConnected' => 'No se pudo conectar a [cuenta IMAP](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'La capacidad de enviar correos.',
      'emailAddress' => 'El registro de usuario (usuario asignado) debe tener la misma dirección de correo para poder utilizar esta cuenta de correo para enviar.',
      'monitoredFolders' => 'Las carpetas deben estar separadas por comas.

Puede agregar una carpeta \'Enviados\' para sincronizar los correos enviados desde un cliente externo.',
      'storeSentEmails' => 'Los correos enviados se almacenarán en el servidor IMAP. El campo Dirección de correo debe coincidir con la dirección desde donde se enviarán los correos.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Principal',
      'Opted Out' => 'Se dieron de baja',
      'Invalid' => 'Inválido'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Inválido',
      'lower' => 'Lower-case Name'
    ],
    'presetFilters' => [
      'orphan' => 'Huérfano'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Asunto',
      'bodyContains' => 'Contenido del cuerpo',
      'bodyContainsAll' => 'El cuerpo contiene todo',
      'action' => 'Acción',
      'isGlobal' => 'Es global',
      'emailFolder' => 'Carpeta',
      'groupEmailFolder' => 'Carpeta de correo grupal',
      'markAsRead' => 'Marcar como leído',
      'skipNotification' => 'Omitir notificación'
    ],
    'links' => [
      'emailFolder' => 'Carpeta',
      'groupEmailFolder' => 'Carpeta de correo grupal'
    ],
    'labels' => [
      'Create EmailFilter' => 'Crear un filtro de email',
      'Emails' => 'Correos'
    ],
    'options' => [
      'action' => [
        'None' => 'Ninguno',
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Poner en la carpeta',
        'Move to Group Folder' => 'Poner en carpeta de grupo'
      ]
    ],
    'tooltips' => [
      'name' => 'Dé al filtro un nombre descriptivo.',
      'subject' => 'Utilice un comodín *:

 * `texto *` - comienza con texto,
 * `* texto *` - contiene texto,
 * `* texto` - termina con texto.',
      'bodyContains' => 'Filtra los correos que en el cuerpo contengan cualquiera de estas palabras o frases.',
      'bodyContainsAll' => 'El cuerpo de un correo electrónico contiene todas las palabras o frases especificadas.',
      'from' => 'Filtra los correos enviados desde esta dirección. Dejar en blanco si no es necesario. Puede usar el comodín *.',
      'to' => 'Filtra los correos enviados a esta dirección. Dejar en blanco si no es necesario. Puede usar el comodín *.',
      'isGlobal' => 'Aplica este filtro a todos los correos entrantes del sistema.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Omitir notificaciones'
    ],
    'labels' => [
      'Create EmailFolder' => 'Crear carpeta',
      'Manage Folders' => 'Administrar carpetas',
      'Emails' => 'Correos'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'HTML',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'oneOff' => 'Único',
      'category' => 'Categoría',
      'insertField' => 'Marcadores de posición'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Crear plantilla de correo',
      'Info' => 'Información',
      'Available placeholders' => 'Placeholders disponibles'
    ],
    'messages' => [
      'infoText' => 'Marcadores de posición disponibles:

{optOutUrl} & # 8211; URL para un enlace para darse de baja;

{optOutLink} & # 8211; un enlace para darse de baja.'
    ],
    'tooltips' => [
      'oneOff' => 'Marque la casilla si usted va a utilizar esta plantilla solo una vez. Por ejemplo para correo masivo.'
    ],
    'presetFilters' => [
      'actual' => 'Actuales'
    ],
    'placeholderTexts' => [
      'today' => 'El día de hoy',
      'now' => 'Fecha y hora actual',
      'currentYear' => 'Año actual',
      'optOutUrl' => 'URL para un enlace para cancelar la suscripción',
      'optOutLink' => 'un enlace para darse de baja'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Crear categoría',
      'Manage Categories' => 'Administrar categorías',
      'EmailTemplates' => 'Plantillas de correo'
    ],
    'fields' => [
      'order' => 'Orden',
      'childList' => 'Lista hija'
    ],
    'links' => [
      'emailTemplates' => 'Plantillas de correo'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Campos',
      'Relationships' => 'Relaciones',
      'Layouts' => 'Diseños',
      'Schedule' => 'Programar',
      'Log' => 'Registros',
      'Formula' => 'Fórmula',
      'Parameters' => 'Parámetros'
    ],
    'fields' => [
      'name' => 'Nombre',
      'type' => 'Tipo',
      'labelSingular' => 'Etiqueta en singular',
      'labelPlural' => 'Etiqueta en plural',
      'stream' => 'Historia',
      'label' => 'Etiqueta',
      'linkType' => 'Tipo de enlace',
      'entity' => 'Entidad',
      'entityForeign' => 'Entidad foránea',
      'linkForeign' => 'Enlace Foráneo',
      'link' => 'Enlace',
      'labelForeign' => 'Etiqueta Foránea',
      'sortBy' => 'Orden predeterminado del campo',
      'sortDirection' => 'Orden predeterminado de la dirección',
      'relationName' => 'Nombre de la Tabla Intermedia',
      'linkMultipleField' => 'Enlaza múltiples campos',
      'linkMultipleFieldForeign' => 'Enlaza múltiples campos foráneos',
      'disabled' => 'Desactivado',
      'textFilterFields' => 'Los campos de filtro de texto',
      'audited' => 'Auditado',
      'auditedForeign' => 'Foráneo auditado',
      'statusField' => 'Campo estado',
      'beforeSaveCustomScript' => 'Antes de guardar la secuencia de comandos personalizada',
      'beforeSaveApiScript' => 'API antes de guardar script',
      'color' => 'Color',
      'kanbanViewMode' => 'Vista Kanban',
      'kanbanStatusIgnoreList' => 'Grupos ignorados en la vista Kanban',
      'iconClass' => 'Ícono',
      'countDisabled' => 'Deshabilitar recuento de registros',
      'fullTextSearch' => 'Búsqueda de texto completo',
      'parentEntityTypeList' => 'Tipos de entidad principal',
      'foreignLinkEntityTypeList' => 'Enlaces extranjeros',
      'optimisticConcurrencyControl' => 'Control de concurrencia optimista',
      'preserveAuditLog' => 'Conservar el registro de auditoría',
      'updateDuplicateCheck' => 'Comprobación duplicada en la actualización',
      'duplicateCheckFieldList' => 'Campos de verificación de duplicados',
      'stars' => 'Marcados',
      'layout' => 'Diseño',
      'selectFilter' => 'Seleccionar filtro',
      'author' => 'Autor',
      'module' => 'Módulo',
      'version' => 'Versión',
      'primaryFilters' => 'Filtros primarios',
      'assignedUsers' => 'Usuarios múltiples asignados',
      'collaborators' => 'Colaboradores',
      'aclContactLink' => 'Enlace de contacto de ACL',
      'aclAccountLink' => 'Enlace de cuenta ACL',
      'activityStatusList' => 'Estados de actividad',
      'historyStatusList' => 'Estados del historial',
      'completedStatusList' => 'Estados completados',
      'canceledStatusList' => 'Estados cancelados'
    ],
    'options' => [
      'type' => [
        '' => 'Ninguno',
        'Base' => 'Base',
        'Person' => 'Persona',
        'CategoryTree' => 'Árbol de categorías',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Empresa'
      ],
      'linkType' => [
        'manyToMany' => 'Mucho-a-Muchos',
        'oneToMany' => 'Uno-a-Muchos',
        'manyToOne' => 'Muchos-a-uno',
        'oneToOneRight' => 'Uno a uno a la derecha',
        'oneToOneLeft' => 'Uno a uno a la izquierda',
        'parentToChildren' => 'Padres-a-Hijos',
        'childrenToParent' => 'Hijos-a-Padres'
      ],
      'sortDirection' => [
        'asc' => 'Ascendente',
        'desc' => 'Descendente'
      ],
      'module' => [
        'Custom' => 'Personalizado'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'Se copia un fragmento de URL del filtro *{name}* al portapapeles. Puedes añadirlo a la barra de navegación.',
      'confirmRemoveLink' => '¿Estás seguro de que quieres eliminar la relación * {link} *?',
      'nameIsAlreadyUsed' => 'El nombre \'{name}\' ya está en uso.',
      'nameIsNotAllowed' => 'El nombre \'{name}\' no está permitido.',
      'nameIsTooLong' => 'El nombre es demasiado largo.',
      'confirmRemove' => '¿Está seguro de que desea eliminar el tipo de entidad del sistema?',
      'entityCreated' => 'La entidad ha sido creada',
      'linkAlreadyExists' => 'Conflicto de nombres en el enlace.',
      'linkConflict' => 'Conflicto de nombres: un enlace o campo con el mismo nombre ya existe.',
      'beforeSaveCustomScript' => 'Un script que se ejecuta cada vez que se guarda una entidad. Se utiliza para configurar campos calculados.',
      'beforeSaveApiScript' => 'Un script que se ejecuta al crear y actualizar solicitudes de API antes de guardar una entidad. Se utiliza para validación personalizada y comprobación de duplicados.'
    ],
    'tooltips' => [
      'aclContactLink' => 'El enlace con Contacto a utilizar al aplicar el control de acceso para los usuarios del portal.',
      'aclAccountLink' => 'El enlace con la Cuenta que se utilizará al aplicar el control de acceso para los usuarios del portal.',
      'collaborators' => 'La capacidad de compartir registros con usuarios específicos.',
      'assignedUsers' => 'La capacidad de asignar varios usuarios a un registro.

Tenga en cuenta que, tras habilitar el parámetro, los usuarios asignados existentes no se transferirán al nuevo campo *Usuarios Asignados*.',
      'duplicateCheckFieldList' => 'Qué campos comprobar al realizar la comprobación de duplicados.',
      'updateDuplicateCheck' => 'Realizar una comprobación de duplicados al actualizar un registro.',
      'optimisticConcurrencyControl' => 'Previene conflictos de escritura.',
      'preserveAuditLog' => 'Desactiva la limpieza del registro de auditoría. Este parámetro solo se aplica si la Historia está desactivada. Si la Historia está activada, los registros de auditoría no se eliminan.',
      'stars' => 'Posibilidad de marcar registros con estrellas. Los usuarios pueden usar las estrellas para marcar registros como favoritos.',
      'statusField' => 'Las actualizaciones de este campo se registran en la historia.',
      'textFilterFields' => 'Campos utilizados por la búsqueda de texto.',
      'stream' => 'Si la entidad tiene Historia.',
      'disabled' => 'Marque si no necesita esta entidad en su sistema.',
      'linkAudited' => 'Crear un registro relacionado y vincularlo con el registro existente, hará que se registre en la historia.',
      'linkMultipleField' => 'El campo de relaciones múltiples proporciona una manera práctica de editar relaciones. No lo use si puede tener un gran número de registros relacionados.',
      'linkSelectFilter' => 'Un filtro principal que se aplicará de forma predeterminada al seleccionar un registro.',
      'entityType' => 'Base: Sin elementos adicionales 

Base Plus - Similar a Posibles clientes y Oportunidades (tiene paneles de Actividades planeadas, Historial de actividades y Tareas).

Evento - Similar a Reuniones y Llamadas (disponible en Calendario y en el Panel de Actividades).

Persona - Similar a Contacto.

Empresa - Similar a Cuenta.',
      'countDisabled' => 'El número total no se mostrará en la vista de lista. Puede disminuir el tiempo de carga cuando la tabla DB es grande.',
      'fullTextSearch' => 'Se requiere ejecutar la reconstrucción.',
      'linkParamReadOnly' => 'Un enlace de solo lectura no se puede editar mediante las solicitudes de API *link* y *unlink*. No será posible relacionar ni desvincular registros mediante el panel de relaciones. Sin embargo, sí es posible editar enlaces de solo lectura mediante los campos de enlace y de enlace múltiple.',
      'activityStatusList' => 'Valores de estado que determinan que un registro de actividad debe mostrarse en el panel Actividad y considerarse como real.',
      'historyStatusList' => 'Valores de estado que determinan que un registro de actividad debe mostrarse en el panel Historial.',
      'completedStatusList' => 'Valores de estado que determinan que una actividad se ha completado.',
      'canceledStatusList' => 'Valores de estado que determinan que una actividad está cancelada y no se tendrán en cuenta en los rangos de libre/ocupado.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exportar todos los campos',
      'fieldList' => 'Lista de campos',
      'format' => 'Formato',
      'status' => 'Estado',
      'xlsxLite' => 'Ligero',
      'xlsxRecordLinks' => 'Enlaces de registros',
      'xlsxTitle' => 'Título'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pendiente',
        'Running' => 'Corriendo',
        'Success' => 'Éxito',
        'Failed' => 'Fallido'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consume mucha menos memoria. Recomendado si se exporta una gran cantidad de registros.',
      'xlsxTitle' => 'Imprima un título y una fecha actual en el encabezado.'
    ],
    'messages' => [
      'exportProcessed' => 'Se ha procesado la exportación. Descargue el [archivo]({url}).',
      'infoText' => 'La exportación se está procesando en modo inactivo por cron. Puede tardar un tiempo en completarse. Cerrar este cuadro de diálogo modal no afectará la ejecución.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Nombre',
      'version' => 'Versión',
      'description' => 'Descripción',
      'isInstalled' => 'Instalado',
      'checkVersionUrl' => 'Una URL para verificar nuevas versiones'
    ],
    'labels' => [
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar'
    ],
    'messages' => [
      'uninstalled' => 'Extensión {name} ha sido desinstalada',
      'fileExceedsMaxUploadSize' => 'El tamaño del archivo supera el tamaño máximo de carga {maxSize}. Considere aumentar `post_max_size` o instalar la extensión mediante la CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Conectar',
      'Disconnect' => 'Desconectar',
      'Disconnected' => 'Desconectado',
      'Connected' => 'Conectado'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'La cuenta externa para la integración \'{integration}\' ha sido deshabilitada debido a que no se puede conectar.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Lógica dinámica',
      'Name' => 'Nombre',
      'Label' => 'Etiqueta',
      'Type' => 'Tipo',
      'View Details' => 'Ver detalles'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Nada',
        'javascript: return this.dateTime.getNow(1);' => 'Ahora',
        'javascript: return this.dateTime.getNow(5);' => 'Ahora (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Ahora (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Ahora (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 día',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 semana'
      ],
      'dateDefault' => [
        '' => 'Nada',
        'javascript: return this.dateTime.getToday();' => 'Hoy',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 semana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mes',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 año'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'Código QR'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Prohibido',
        'internal' => 'Interno',
        'onlyAdmin' => 'Solo para administradores',
        'readOnly' => 'Sólo lectura',
        'nonAdminReadOnly' => 'Solo lectura para no administradores'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Reutilizar opciones de otro campo.',
      'currencyDecimal' => 'Utilice el tipo decimal en la base de datos. En la aplicación, los valores se representarán como cadenas. Marque este parámetro si se requiere precisión.',
      'cutHeight' => 'Un texto con un valor superior a un valor especificado se cortará y se mostrará un botón \'mostrar más\'.',
      'urlStrip' => 'Quitar el protocolo y la barra diagonal final.',
      'audited' => 'Las actualizaciones se registrarán en la historia.',
      'required' => 'El campo será obligatorio. No se puede dejar vacío.',
      'default' => 'El valor se establecerá de forma predeterminada al guardar.',
      'min' => 'Valor mínimo aceptado.',
      'max' => 'Valor máximo aceptado.',
      'seeMoreDisabled' => 'Si no se marca, los textos largos se cortarán.',
      'lengthOfCut' => 'Que largo tendrán los textos antes de ser cortados.',
      'maxLength' => 'Longitud máxima aceptable del texto.',
      'before' => 'El valor de fecha debe ser anterior al valor de fecha del campo especificado.',
      'after' => 'El valor de fecha debe ser posterior al valor de fecha del campo especificado.',
      'readOnly' => 'El usuario no puede especificar el valor del campo. Pero se puede calcular por fórmula.',
      'readOnlyAfterCreate' => 'El valor del campo se puede especificar al crear un nuevo registro. Después, el campo pasa a ser de solo lectura. Aún se puede calcular mediante fórmulas.',
      'preview' => 'Mostrar el botón de vista previa. Aplicable si Markdown está habilitado.',
      'fileAccept' => 'Qué tipos de archivos aceptar. Es posible agregar elementos personalizados.',
      'barcodeLastChar' => 'Para el tipo EAN-13.',
      'maxFileSize' => 'Si está vacío o es 0, entonces no limitar',
      'conversionDisabled' => 'La acción de conversión de moneda no se aplicará a este campo.',
      'pattern' => 'Una expresión regular para comparar el valor de un campo. Define una expresión o selecciona una predefinida.',
      'options' => 'Una lista de posibles valores y sus etiquetas.',
      'optionsArray' => 'Una lista de posibles valores y sus etiquetas. Si está vacío, el campo permitirá introducir valores personalizados.',
      'maxCount' => 'Número máximo de elementos que se pueden seleccionar.',
      'displayAsList' => 'Cada elemento en una nueva línea.',
      'optionsVarchar' => 'Una lista de valores de autocompletar.',
      'linkReadOnly' => 'El usuario no puede especificar el valor del campo, pero sí puede calcularlo mediante una fórmula.

También deshabilitará la posibilidad de crear un registro relacionado desde los paneles de relaciones.',
      'relateOnImport' => 'Al importar con este campo, se relacionará automáticamente un registro con un registro externo coincidente. Utilice esta función solo si el campo externo se considera único.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Calle',
        'city' => 'Ciudad',
        'state' => 'Estado',
        'country' => 'País',
        'postalCode' => 'Código Postal',
        'map' => 'Mapa'
      ],
      'personName' => [
        'salutation' => 'Saludo',
        'first' => 'Nombre',
        'middle' => 'Medio',
        'last' => 'Apellido'
      ],
      'currency' => [
        'converted' => '(Convertido)',
        'currency' => '(Moneda)'
      ],
      'datetimeOptional' => [
        'date' => 'Fecha'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'Un texto de una sola línea.',
      'enum' => 'En la casilla de selección, solo se puede seleccionar un valor.',
      'text' => 'Un texto de varias líneas con soporte de rebajas.',
      'date' => 'Fecha sin hora.',
      'datetime' => 'Fecha y hora',
      'currency' => 'Un valor de moneda. Un número flotante con un código de moneda.',
      'int' => 'Un número entero.',
      'float' => 'Un número con una parte decimal.',
      'bool' => 'Una casilla de verificación. Dos valores posibles: verdadero y falso.',
      'multiEnum' => 'Se puede seleccionar una lista de valores, múltiples valores. La lista está ordenada.',
      'checklist' => 'Una lista de casillas de verificación.',
      'array' => 'Una lista de valores, similar al campo Multi-Enum.',
      'address' => 'Una dirección con calle, ciudad, estado, código postal y país.',
      'url' => 'Para almacenar enlaces.',
      'urlMultiple' => 'Enlaces múltiples.',
      'wysiwyg' => 'Un texto con soporte HTML.',
      'file' => 'Para cargar archivos.',
      'image' => 'Para cargar imágenes.',
      'attachmentMultiple' => 'Permite cargar varios archivos.',
      'number' => 'Un número de tipo de cadena que se incrementa automáticamente con un posible prefijo y una longitud específica.',
      'autoincrement' => 'Un número entero generado de solo lectura que se incrementa automáticamente.',
      'barcode' => 'Un código de barras. Puede imprimirse en PDF.',
      'email' => 'Un conjunto de direcciones de correo con sus parámetros: inhabilitado, no válido, principal.',
      'phone' => 'Un conjunto de números de teléfono con sus parámetros: tipo, inhabilitado, no válido, principal.',
      'foreign' => 'Un campo de un registro relacionado. Solo lectura.',
      'link' => 'Un registro relacionado a través de la relación Pertenece a (varios a uno o uno a uno).',
      'linkParent' => 'Un registro relacionado a través de la relación Pertenece a los padres. Puede ser de diferentes tipos de entidad.',
      'linkMultiple' => 'Un conjunto de registros relacionados mediante una relación Has-Many varios (many-to-many o one-to-many). No todas las relaciones tienen campos de enlace múltiple. Solo los tienen aquellas donde el parámetro de enlace múltiple está habilitado.'
    ],
    'messages' => [
      'fieldCreatedAddToLayouts' => 'Se ha creado el campo. Ahora puedes añadirlo a [Diseño]({link})',
      'confirmRemove' => '¿Está seguro de que desea eliminar el campo *{field}*?

La eliminación del campo no elimina los datos de la base de datos. Los datos se eliminarán si realiza una reconstrucción completa.',
      'fieldNameIsNotAllowed' => 'El nombre de campo \'{field}\' no está permitido.',
      'fieldAlreadyExists' => 'El campo \'{field}\' ya existe en \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'El enlace con el nombre \'{field}\' ya existe en \'{entityType}\'.',
      'namingFieldLinkConflict' => 'El nombre \'{field}\' entra en conflicto con el enlace.'
    ],
    'otherFields' => [
      'attributes' => 'Atributos'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Comprobar sintaxis',
      'Run' => 'Ejecutar'
    ],
    'fields' => [
      'target' => 'Objetivo',
      'targetType' => 'Tipo de objetivo',
      'script' => 'Script',
      'output' => 'Salida',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Ejecutado exitosamente.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'La sintaxis es correcta.',
      'checkSyntaxError' => 'Error de sintaxis.',
      'emptyScript' => 'El script está vacío.'
    ],
    'tooltips' => [
      'output' => 'Imprima valores con la función `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Nota',
      'Email' => 'Correo',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'EmailTemplateCategory' => 'Categorías de plantillas de correo',
      'EmailAccount' => 'Cuenta de correo personal',
      'EmailAccountScope' => 'Cuenta de correo personal',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Programada',
      'ExternalAccount' => 'Cuenta Externa',
      'Extension' => 'Extensión',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Cuenta de correo grupal',
      'Stream' => 'Historia',
      'Import' => 'Importar',
      'ImportError' => 'Error de importación',
      'Template' => 'Plantilla',
      'Job' => 'Trabajo',
      'EmailFilter' => 'Filtro de correo',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol del portal',
      'Attachment' => 'Adjunto',
      'EmailFolder' => 'Carpeta de correo',
      'GroupEmailFolder' => 'Carpeta de correo grupal',
      'PortalUser' => 'Usuario del portal',
      'ApiUser' => 'Usuario de API',
      'ScheduledJobLogRecord' => 'Registro del registro de trabajo programado',
      'PasswordChangeRequest' => 'Solicitar Cambio de Contraseña',
      'ActionHistoryRecord' => 'Registro del histórico',
      'AuthToken' => 'Token de autenticación',
      'UniqueId' => 'ID Único',
      'LastViewed' => 'Historial de acciones',
      'Settings' => 'Ajustes',
      'FieldManager' => 'Administrador de campos',
      'Integration' => 'Integración',
      'LayoutManager' => 'Administrador de diseño',
      'EntityManager' => 'Gestionar de entidades',
      'Export' => 'Exportar',
      'DynamicLogic' => 'Lógica dinámica',
      'DashletOptions' => 'Ajustes de cajas',
      'Admin' => 'Administrador',
      'Global' => 'Global',
      'Preferences' => 'Preferencias',
      'EmailAddress' => 'Dirección de correo',
      'PhoneNumber' => 'Número de teléfono',
      'AppLogRecord' => 'Registro de la aplicación',
      'AuthLogRecord' => 'Entrada del registro de autenticación',
      'AuthFailLogRecord' => 'Entrada de registros de fallos de autenticación ',
      'LeadCapture' => 'Punto de entrada de captura de clientes potenciales',
      'LeadCaptureLogRecord' => 'Entrada del registro de captura de clientes potenciales',
      'ArrayValue' => 'Valor de matriz',
      'DashboardTemplate' => 'Plantilla de escritorio',
      'Currency' => 'Divisa',
      'LayoutSet' => 'Conjunto de diseño',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Elemento de cola de webhook',
      'WebhookEventQueueItem' => 'Webhook Event Queue Item',
      'Mass Action' => 'Acción masiva',
      'WorkingTimeCalendar' => 'Calendario de jornada laboral',
      'WorkingTimeRange' => 'Excepción del tiempo de trabajo',
      'AuthenticationProvider' => 'Proveedor de autenticación',
      'GlobalStream' => 'Historia global',
      'AddressCountry' => 'Dirección País',
      'AppSecret' => 'Secreto de la aplicación',
      'OAuthProvider' => 'Proveedor de OAuth',
      'OAuthAccount' => 'Cuenta OAuth',
      'Account' => 'Negocio',
      'Contact' => 'Contacto',
      'Lead' => 'Posible cliente',
      'Target' => 'Objetivo',
      'Opportunity' => 'Oportunidad',
      'Meeting' => 'Reunión',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Ticket',
      'Document' => 'Documento',
      'DocumentFolder' => 'Carpeta de documento',
      'Campaign' => 'Campaña',
      'TargetList' => 'Lista de objetivos',
      'MassEmail' => 'Correo masivo',
      'EmailQueueItem' => 'Elemento en cola de correos',
      'CampaignTrackingUrl' => 'URL de seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Artículo de la base de conocimiento',
      'KnowledgeBaseCategory' => 'Categoría de la base de conocimiento',
      'CampaignLogRecord' => 'Registro del registro de la campaña',
      'TargetListCategory' => 'Categoría de la lista de objetivos',
      'CCotizaciones' => 'Cotización',
      'CPliza' => 'Póliza',
      'CCompaias' => 'Compañia',
      'CReclamos' => 'Reclamo',
      'CEntidades' => 'Entidad',
      'CCobro' => 'Cobro',
      'CRamo' => 'Ramo',
      'CExpediente' => 'Expediente'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notas',
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Plantillas de correo',
      'EmailTemplateCategory' => 'Categorías de plantillas de correo',
      'EmailAccount' => 'Cuentas de correo personales',
      'EmailAccountScope' => 'Cuentas de correo personales',
      'OutboundEmail' => 'Correos salientes',
      'ScheduledJob' => 'Tareas programadas',
      'ExternalAccount' => 'Cuentas externas',
      'Extension' => 'Extensiones',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Cuentas de correo grupales',
      'EmailAddress' => 'Direcciones de correo',
      'PhoneNumber' => 'Números de teléfono',
      'Stream' => 'Historia',
      'Import' => 'Importar',
      'ImportError' => 'Errores de importación',
      'Template' => 'Plantillas',
      'Job' => 'Trabajos',
      'EmailFilter' => 'Filtros de correo',
      'Portal' => 'Portales',
      'PortalRole' => 'Roles del portal',
      'Attachment' => 'Adjuntos',
      'EmailFolder' => 'Carpetas de correo',
      'GroupEmailFolder' => 'Carpetas de correo grupales',
      'PortalUser' => 'Usuarios del portal',
      'ApiUser' => 'Usuarios de API',
      'ScheduledJobLogRecord' => 'Registros del registro de trabajo programado',
      'PasswordChangeRequest' => 'Solicitar Cambios de Contraseñas',
      'ActionHistoryRecord' => 'Histórico',
      'AuthToken' => 'Tokens',
      'UniqueId' => 'ID Únicos',
      'LastViewed' => 'Historial de acciones',
      'AppLogRecord' => 'Registro de la aplicación',
      'AuthLogRecord' => 'Registros de autenticación',
      'AuthFailLogRecord' => 'Registros de fallos de autenticación',
      'LeadCapture' => 'Captura de clientes potenciales',
      'LeadCaptureLogRecord' => 'Registros de captura de clientes potenciales',
      'ArrayValue' => 'Valor de matriz',
      'DashboardTemplate' => 'Plantilla de escritorio',
      'Currency' => 'Divisa',
      'LayoutSet' => 'Conjuntos de diseño',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Elemento de cola de webhook',
      'WebhookEventQueueItem' => 'Webhook Event Queue Items',
      'WorkingTimeCalendar' => 'Calendarios de jornada laboral',
      'WorkingTimeRange' => 'Excepciones al tiempo de trabajo',
      'AuthenticationProvider' => 'Proveedores de autenticación',
      'GlobalStream' => 'Historia global',
      'AddressCountry' => 'Dirección Países',
      'AppSecret' => 'Secretos de la aplicación',
      'OAuthProvider' => 'Proveedores de OAuth',
      'OAuthAccount' => 'Cuentas OAuth',
      'Account' => 'Negocios',
      'Contact' => 'Contactos',
      'Lead' => 'Posibles clientes',
      'Target' => 'Objetivos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Tickets',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Carpetas de documentos',
      'Campaign' => 'Campañas',
      'TargetList' => 'Lista de objetivos',
      'MassEmail' => 'Correos masivos',
      'EmailQueueItem' => 'Elementos en cola de correos',
      'CampaignTrackingUrl' => 'URLs de seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Base de conocimiento',
      'KnowledgeBaseCategory' => 'Categorías de la base de conocimiento',
      'CampaignLogRecord' => 'Registros del registro de la campaña',
      'TargetListCategory' => 'Categorías de la lista de objetivos',
      'CCotizaciones' => 'Cotizaciones',
      'CPliza' => 'Pólizas',
      'CCompaias' => 'Compañias',
      'CReclamos' => 'Reclamos',
      'CEntidades' => 'Entidades',
      'CCobro' => 'Cobros',
      'CRamo' => 'Ramos',
      'CExpediente' => 'Expedientes'
    ],
    'labels' => [
      'Previous Page' => 'Página anterior',
      'Next Page' => 'Página siguiente',
      'First Page' => 'Primera página',
      'Last Page' => 'Última página',
      'Page' => 'Página',
      'Sort' => 'Ordenar',
      'Column Resize' => 'Cambiar el tamaño de la columna',
      'Misc' => 'Misceláneos',
      'General' => 'General',
      'Merge' => 'Unir',
      'None' => 'Ninguno',
      'Home' => 'Inicio',
      'by' => 'por',
      'Proceed' => 'Continuar',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'No válido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Attached' => 'Adjunto',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Send' => 'Enviar',
      'Merged' => 'Fusionado',
      'Removed' => 'Eliminado',
      'Posted' => 'Publicado',
      'Linked' => 'Enlazado',
      'Unlinked' => 'Desenlazado',
      'Done' => 'Hecho',
      'Access denied' => 'Acceso denegado',
      'Not found' => 'No encontrado',
      'Access' => 'Acceso',
      'Timeout' => 'Se acabó el tiempo',
      'No internet' => 'Sin internet',
      'Network error' => 'Network error',
      'Are you sure?' => '¿Está seguro?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'Nombre de usuario/contraseña incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Username can not be empty!' => '¡El nombre de usuario no puede estar vacío!',
      'Cache is not enabled' => 'La caché no está habilitada',
      'Cache has been cleared' => 'La caché fue limpiada correctamente',
      'Rebuild has been done' => 'El sistema se ha reconstruido correctamente',
      'Return to Application' => 'Volver a la aplicación',
      'Modified' => 'Modificado',
      'Created' => 'Creado',
      'Create' => 'Crear',
      'create' => 'crear',
      'Scheduled' => 'Programado',
      'Overview' => 'General',
      'Details' => 'Detalles',
      'Add Field' => 'Añadir Campo',
      'Add Dashlet' => 'Añadir Caja',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar escritorio',
      'Add' => 'Añadir',
      'Add Item' => 'Agregar elemento',
      'Reset' => 'Resetear',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Solo míos',
      'Open' => 'Abiertos',
      'Admin' => 'Administrador',
      'About' => 'Acerca',
      'Refresh' => 'Actualizar',
      'Remove' => 'Eliminar',
      'Restore' => 'Restaurar',
      'Options' => 'Ajustes',
      'Username' => 'Nombre de usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Log in' => 'Iniciar sesión',
      'Log in as' => 'Iniciar sesión como',
      'Sign in' => 'Registrarse',
      'Preferences' => 'Preferencias',
      'State' => 'Estado',
      'Street' => 'Calle',
      'Country' => 'País',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Star' => 'Marcar',
      'Unstar' => 'Desmarcar',
      'Starred' => 'Marcados',
      'Followed' => 'Siguiendo',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Borrar la caché local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Guardar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Desenlazar',
      'Mass Update' => 'Actualización masiva',
      'Export' => 'Exportar',
      'No Data' => 'Sin Datos',
      'No Access' => 'Sin acceso',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Publicar',
      'Stream' => 'Historia',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Ajustes de cajas',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Nombre',
      'Last Name' => 'Apellidos',
      'Middle Name' => 'Segundo nombre',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Change' => 'Cambio',
      'Primary' => 'Principal',
      'Save Filter' => 'Guardar Filtro',
      'Remove Filter' => 'Quitar filtro',
      'Ready' => 'Listo',
      'Administration' => 'Administración',
      'Run Import' => 'Ejecutar importación',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificaciones',
      'Mark all read' => 'Marcar todos como leído',
      'See more' => 'Ver más',
      'Today' => 'Hoy',
      'Tomorrow' => 'Mañana',
      'Yesterday' => 'Ayer',
      'Now' => 'Ahora',
      'Submit' => 'Enviar',
      'Close' => 'Cerrar',
      'Yes' => 'Si',
      'No' => 'No',
      'Select All Results' => 'Seleccionar todos los resultados',
      'Value' => 'Valor',
      'Current version' => 'Versión actual',
      'List View' => 'Vista de Lista',
      'Tree View' => 'Vista de árbol',
      'Unlink All' => 'Desenlazar todo',
      'Total' => 'Total',
      'Print' => 'Imprimir',
      'Print to PDF' => 'Imprimir PDF',
      'Default' => 'Por defecto',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Crear entrada',
      'Previous Entry' => 'Entrada anterior',
      'Next Entry' => 'Siguiente Entrada',
      'View List' => 'Ver lista completa',
      'Attach File' => 'Adjuntar archivo',
      'Skip' => 'Omitir',
      'Attribute' => 'Atributo',
      'Function' => 'Función',
      'Self-Assign' => 'Autoasignar',
      'Self-Assigned' => 'Autosegnado',
      'Expand' => 'Expandir',
      'Collapse' => 'Contraer',
      'Expanded' => 'Expandido',
      'Collapsed' => 'Colapsado',
      'Top Level' => 'Nivel superior',
      'New notifications' => 'Nuevas notificaciones',
      'Manage Categories' => 'Administrar categorías',
      'Manage Folders' => 'Administrar carpetas',
      'Convert to' => 'Convertir a',
      'View Personal Data' => 'Ver datos personales',
      'Personal Data' => 'Información personal',
      'Erase' => 'Borrar',
      'View Followers' => 'Ver seguidores',
      'Convert Currency' => 'Convertir moneda',
      'View on Map' => 'Ver en el mapa',
      'Preview' => 'Vista previa',
      'Move Over' => 'Moverse',
      'Up' => 'Arrib',
      'Save & Continue Editing' => 'Guardar y continuar editando',
      'Save & New' => 'Guardar y crear nuevo',
      'Field' => 'Campo',
      'Fields' => 'Campos',
      'Resolution' => 'Resolución',
      'Resolve Conflict' => 'Resolver conflictos',
      'Download' => 'Descargar',
      'Global Search' => 'Búsqueda global',
      'Navigation Panel' => 'Mostrar panel de navegación',
      'Copy to Clipboard' => 'Copiar al portapapeles',
      'Copied to clipboard' => 'Copiado al portapapeles',
      'Audit Log' => 'Registro de auditoría',
      'View Audit Log' => 'Ver registro de auditoría',
      'View User Access' => 'Ver acceso de usuario',
      'Reacted' => 'Reaccionó',
      'Reaction Removed' => 'Reacción eliminada',
      'Reactions' => 'Reacciones',
      'Schedule' => 'Cronograma',
      'Log' => 'Registro',
      'Scheduler' => 'Programador',
      'Create InboundEmail' => 'Crear correo grupal',
      'Activities' => 'Actividades',
      'History' => 'Historial de actividades',
      'Attendees' => 'Asistentes',
      'Schedule Meeting' => 'Programar reunión',
      'Schedule Call' => 'Programar llamada',
      'Compose Email' => 'Escribir correo',
      'Log Meeting' => 'Registrar reunión',
      'Log Call' => 'Registrar llamada',
      'Archive Email' => 'Nuevo Correo Archivado',
      'Create Task' => 'Crear tarea',
      'Tasks' => 'Tareas'
    ],
    'messages' => [
      'pleaseWait' => 'Por favor espere...',
      'loading' => 'Cargando...',
      'saving' => 'Guardando...',
      'confirmLeaveOutMessage' => '¿Seguro que quieres salir del formulario?',
      'notModified' => 'Usted no ha modificado el registro',
      'duplicate' => 'El registro que está creando parece ser un duplicado',
      'dropToAttach' => 'Arrastre para adjuntar',
      'pageNumberIsOutOfBound' => 'El número de página está fuera de límite',
      'fieldUrlExceedsMaxLength' => 'La URL codificada excede la longitud máxima de {maxLength}',
      'fieldNotMatchingPattern' => '{field} no coincide con el patrón `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contiene caracteres no permitidos',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} no debe contener caracteres especiales ASCII',
      'fieldNotMatchingPattern$latinLetters' => '{field} solo puede contener letras latinas',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} solo puede contener letras y dígitos latinos',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} solo puede contener letras latinas, dígitos y espacios en blanco',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} solo puede contener letras latinas y espacios en blanco',
      'fieldNotMatchingPattern$digits' => '{field} solo puede contener dígitos',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} debe ser una URL válida',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contiene caracteres no permitidos en un número de teléfono',
      'fieldInvalid' => '{campo} no es válido',
      'fieldIsRequired' => '{field} es requerido',
      'fieldPhoneInvalid' => '{campo} no es válido',
      'fieldPhoneInvalidCode' => 'Código de país no válido',
      'fieldPhoneTooShort' => '{field} es demasiado corto',
      'fieldPhoneTooLong' => '{field} es demasiado largo',
      'fieldPhoneInvalidCharacters' => 'Sólo se permiten dígitos, letras latinas y caracteres `-+_@:#().`',
      'fieldPhoneExtensionTooLong' => 'La extensión no debe ser mayor que {maxLength}',
      'fieldShouldBeEmail' => '{field} debe ser un correo válido',
      'fieldShouldBeFloat' => '{field} debe ser un decimal válido',
      'fieldShouldBeInt' => '{field} debe ser un entero válido',
      'fieldShouldBeNumber' => '{field} debe ser un número válido',
      'fieldShouldBeDate' => '{field} debe ser una fecha válida',
      'fieldShouldBeDatetime' => '{field} debe ser una fecha válida fecha/hora',
      'fieldShouldAfter' => '{field} debe estar después de {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes de {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} y {max}',
      'fieldShouldBeLess' => '{field} no debe ser mayor que {value}',
      'fieldShouldBeGreater' => '{field} no debe ser menor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
      'fieldMaxFileSizeError' => 'El archivo no puede exeder los {max} Mb',
      'fieldValueDuplicate' => 'Valor duplicado',
      'fieldIsUploading' => 'Subida en progreso',
      'fieldExceedsMaxCount' => 'El recuento excede el máximo permitido {maxCount}',
      'barcodeInvalid' => '{field} no es un {type} válido',
      'arrayItemMaxLength' => 'El elemento no debe tener más de {max} caracteres',
      'arrayInputNotEmpty' => 'El artículo se ingresó pero no se agregó',
      'resetPreferencesDone' => 'Preferencias se ha restablecido a los valores predeterminados',
      'confirmation' => '¿Está seguro?',
      'unlinkAllConfirmation' => '¿Seguro que deseas desvincular todos los registros relacionados?',
      'resetPreferencesConfirmation' => '¿Está seguro que desea restablecer las preferencias?',
      'removeRecordConfirmation' => '¿Está seguro que quiere eliminar los registros?',
      'unlinkRecordConfirmation' => '¿Está seguro que quiere desenlazar la relación?',
      'removeSelectedRecordsConfirmation' => '¿Está seguro que quiere eliminar los registros seleccionados?',
      'unlinkSelectedRecordsConfirmation' => '¿Está seguro de que desea desvincular los registros seleccionados?',
      'massUpdateResult' => '{count} registros se han actualizado',
      'massUpdateResultSingle' => '{count} registro ha sido actualizado',
      'recalculateFormulaConfirmation' => '¿Está seguro de que desea volver a calcular la fórmula para los registros seleccionados?',
      'noRecordsUpdated' => 'Ningún registro fue actualizado',
      'massRemoveResult' => '{count} registros se han eliminado',
      'massRemoveResultSingle' => '{count} registro se ha eliminado',
      'noRecordsRemoved' => 'Ningún registro fue eliminado',
      'clickToRefresh' => 'Clic para actualizar',
      'writeYourCommentHere' => 'Escriba su comentario aquí',
      'writeMessageToUser' => 'Escribir un mensaje a {user}',
      'writeMessageToSelf' => 'Escribir un mensaje en tu historia',
      'typeAndPressEnter' => 'Escriba y presione enter',
      'checkForNewNotifications' => 'Comprobar si hay nuevas notificaciones',
      'checkForNewNotes' => 'Comprobar si hay actualizaciones en la historia',
      'internalPost' => 'El puesto será visto solo por los usuarios internos',
      'internalPostTitle' => 'El mensaje es visto solo por usuarios internos',
      'done' => 'Hecho',
      'notUpdated' => 'No actualizado',
      'confirmMassUpdate' => '¿Está seguro de que desea actualizar masivamente los registros seleccionados?',
      'confirmMassFollow' => '¿Está seguro que desea seguir los registros seleccionados?',
      'confirmMassUnfollow' => '¿Está seguro que desea dejar de seguir los registros seleccionados?',
      'massFollowResult' => 'Se han seguido {count} registros',
      'massUnfollowResult' => 'Se han dejado de seguir {count} registros',
      'massFollowResultSingle' => 'Se han seguido {count} registro',
      'massUnfollowResultSingle' => 'Se han dejado de seguir {count} registro',
      'massFollowZeroResult' => 'Nada se siguió',
      'massUnfollowZeroResult' => 'Nada se dejó de seguir',
      'erasePersonalDataConfirmation' => 'Los campos marcados se borrarán permanentemente. ¿Estás seguro?',
      'maintenanceModeError' => 'La aplicación actualmente está en modo de mantenimiento.',
      'maintenanceMode' => 'La aplicación actualmente está en modo de mantenimiento. Solo los usuarios administradores tienen acceso.

El modo de mantenimiento se puede deshabilitar en Administración → Ajustes.',
      'resolveSaveConflict' => 'El registro se ha modificado. Debe resolver el conflicto antes de poder guardarlo.',
      'massPrintPdfMaxCountError' => 'No se puede imprimir más que {maxCount} registros.',
      'massActionProcessed' => 'Se ha procesado la acción masiva.',
      'validationFailure' => 'Error de validación del servidor.

Campo: `{field}`
Validación: `{type}`',
      'extensionLicenseInvalid' => 'Licencia de extensión \'{name}\' no válida.',
      'extensionLicenseExpired' => 'La suscripción a la licencia de extensión \'{name}\' ha expirado.',
      'extensionLicenseSoftExpired' => 'La suscripción a la licencia de extensión \'{name}\' ha expirado.',
      'confirmAppRefresh' => 'La aplicación se ha actualizado. Se recomienda actualizar la página para garantizar su correcto funcionamiento.',
      'loggedOutLeaveOut' => 'Se desconectó. La sesión está inactiva. Podría perder los datos del formulario no guardados al actualizar la página. Quizás necesite hacer una copia.',
      'noAccessToRecord' => 'La operación requiere acceso `{action}` al registro.',
      'noAccessToForeignRecord' => 'La operación requiere acceso `{action}` al registro externo.',
      'noLinkAccess' => 'No se puede conectar con el registro {foreignEntityType} mediante el enlace \'{link}\'. No hay acceso.',
      'cannotUnrelateRequiredLink' => 'No se puede desvincular el enlace requerido.',
      'cannotRelateNonExisting' => 'No se puede relacionar con un registro {foreignEntityType} inexistente.',
      'cannotRelateForbidden' => 'No se puede relacionar con el registro {foreignEntityType} prohibido. Se requiere acceso `{action}`.',
      'cannotRelateForbiddenLink' => 'No hay acceso al enlace \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'No se puede vincular un registro ya vinculado.',
      'error404' => 'No se puede gestionar la URL solicitada.',
      'error403' => 'No tienes acceso a esta área.',
      'emptyMassUpdate' => 'No hay campos disponibles para actualización masiva.',
      'attemptIntervalFailure' => 'La operación no está permitida durante un intervalo de tiempo específico. Espere un tiempo antes del siguiente intento.',
      'confirmRestoreFromAudit' => 'Los valores anteriores se configurarán en un formulario. Luego, puede guardar el registro para restaurarlos.',
      'starsLimitExceeded' => 'El número de estrellas excedió el límite.',
      'select2OrMoreRecords' => 'Seleccione 2 o más registros',
      'selectNotMoreThanNumberRecords' => 'Seleccione no más de {number} registros',
      'selectAtLeastOneRecord' => 'Seleccione al menos un registro',
      'duplicateConflict' => 'Ya existe un registro.',
      'cannotRemoveCategoryWithChildCategory' => 'No se puede eliminar una categoría que tenga una categoría secundaria.',
      'cannotRemoveNotEmptyCategory' => 'No se puede eliminar una categoría que no esté vacía.',
      'sameRecordIsAlreadyBeingEdited' => 'El registro ya está siendo editado.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Solo míos',
      'onlyMyTeam' => 'Mi equipo',
      'followed' => 'Siguiendo',
      'shared' => 'Compartido'
    ],
    'presetFilters' => [
      'followed' => 'Siguiendo',
      'all' => 'Todos',
      'starred' => 'Marcado'
    ],
    'massActions' => [
      'delete' => 'Borrar',
      'remove' => 'Eliminar',
      'merge' => 'Unir',
      'update' => 'Actualizar',
      'massUpdate' => 'Actualización masiva',
      'unlink' => 'Desvincular',
      'export' => 'Exportar',
      'follow' => 'Seguir',
      'unfollow' => 'Dejar de seguir',
      'convertCurrency' => 'Convertir moneda',
      'recalculateFormula' => 'Recalcular fórmula',
      'printPdf' => 'Print to PDF
'
    ],
    'fields' => [
      'name' => 'Nombre',
      'firstName' => 'Nombre',
      'lastName' => 'Apellidos',
      'middleName' => 'Segundo nombre',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario asignado',
      'assignedUsers' => 'Usuarios asignados',
      'collaborators' => 'Colaboradores',
      'emailAddress' => 'Correo',
      'emailAddressData' => 'Datos de dirección de correo',
      'emailAddressIsOptedOut' => 'La dirección de correo está dada de baja',
      'emailAddressIsInvalid' => 'La dirección de correo no es válida',
      'assignedUserName' => 'Nombre de usuario asignado',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'createdAt' => 'Creado en',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'streamUpdatedAt' => 'Transmisión actualizada en',
      'description' => 'Descripción',
      'address' => 'Dirección',
      'phoneNumber' => 'Teléfono',
      'phoneNumberMobile' => 'Teléfono (Móvil)',
      'phoneNumberHome' => 'Teléfono (Casa)',
      'phoneNumberFax' => 'Teléfono (Fax)',
      'phoneNumberOffice' => 'Teléfono (Oficina)',
      'phoneNumberOther' => 'Teléfono (Otro)',
      'phoneNumberData' => 'Datos del número de teléfono',
      'phoneNumberIsOptedOut' => 'El teléfono está excluido',
      'phoneNumberIsInvalid' => 'El número de teléfono no es válido',
      'order' => 'Orden',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Tipo',
      'names' => 'Nombres',
      'types' => 'Tipos',
      'targetListIsOptedOut' => 'Se dieró de baja',
      'childList' => 'Lista de hijos',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Calle',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Ciudad (envío)',
      'shippingAddressStreet' => 'Calle (envío)',
      'shippingAddressCountry' => 'País (envío)',
      'shippingAddressState' => 'Estado (envío)',
      'shippingAddressPostalCode' => 'Código Postal (envío)',
      'shippingAddressMap' => 'Mapa (envío)'
    ],
    'links' => [
      'assignedUser' => 'Usuario asignado',
      'assignedUsers' => 'Usuarios asignados',
      'collaborators' => 'Colaboradores',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'team' => 'Equipo',
      'roles' => 'Roles',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Posibles clientes',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'accounts' => 'Cuentas',
      'cases' => 'Tickets',
      'documents' => 'Documentos',
      'account' => 'Cuenta',
      'opportunity' => 'Oportunidad',
      'contact' => 'Contacto'
    ],
    'dashlets' => [
      'Stream' => 'Historia',
      'Emails' => 'Mi bandeja de entrada',
      'Iframe' => 'Iframe',
      'Records' => 'Lista de registros',
      'Memo' => 'Nota',
      'Leads' => 'Mis posibles clientes',
      'Opportunities' => 'Mis oportunidades',
      'Tasks' => 'Mis tareas',
      'Cases' => 'Mis tickets',
      'Calendar' => 'Calendario',
      'Calls' => 'Mis llamadas',
      'Meetings' => 'Mis reuniones',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades por toma de contacto del posible cliente',
      'SalesByMonth' => 'Ventas por mes',
      'SalesPipeline' => 'Canalización de ventas',
      'Activities' => 'Mis próximas actividades'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} ha sido asignado a usted',
      'emailReceived' => 'Correo recibido de: {from}',
      'entityRemoved' => '{user} ha eliminado: {entityType} {entity}',
      'emailInbox' => '{user} agregó el correo {entity} a su bandeja de entrada',
      'userPostReaction' => '{user} reaccionó a tu {post}',
      'userPostInParentReaction' => '{user} reaccionó a tu {post} en {entityType} {entity}',
      'eventAttendee' => '{user} te agregó a {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} ha publicado en: {entityType} {entity}',
      'attach' => '{user} ha añadido un archivo adjunto en: {entityType} {entity}',
      'status' => '{user} ha actualizado el campo {field} en: {entityType} {entity}',
      'update' => '{user} ha actualizado: {entityType} {entity}',
      'postTargetTeam' => '{user} ha publicado en el equipo {target}',
      'postTargetTeams' => '{user} ha publicado en los equipos {target}',
      'postTargetPortal' => '{user} ha publicado en el portal {target}',
      'postTargetPortals' => '{user} ha publicado en los portales {target}',
      'postTarget' => '{user} ha publicado en {target}',
      'postTargetYou' => '{user} ha publicado pora usted',
      'postTargetYouAndOthers' => '{user} ha publicado para {target} y para usted',
      'postTargetAll' => '{user} ha publicado para todos',
      'postTargetSelf' => '{user} se ha enviado un mensaje a sí mismo',
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí mismo',
      'mentionInPost' => '{user} ha mencionado a {mentioned} en: {entityType} {entity}',
      'mentionYouInPost' => '{user} te ha mencionado en: {entityType} {entity}',
      'mentionInPostTarget' => '{user} ha mencionado a {mentioned} en la publicación',
      'mentionYouInPostTarget' => '{user} te ha mencionado en la publicación para {target}',
      'mentionYouInPostTargetAll' => '{user} te ha mencionado en una publicación para todos',
      'mentionYouInPostTargetNoTarget' => '{user} te ha mencionado en una publicación',
      'create' => '{user} ha creado: {entityType} {entity}',
      'createThis' => '{user} ha creado: {entityType}',
      'createAssignedThis' => '{user} ha creado y se lo ha asignado a {assignee}: {entityType}',
      'createAssigned' => '{user} ha creado y se lo ha asignado a {assignee}: {entityType} {entity}',
      'createAssignedYou' => '{user} ha creado y te lo ha asignado: {entityType} {entity}',
      'createAssignedThisSelf' => '{user} ha creado y se ha asignado a sí mismo: {entityType}',
      'createAssignedSelf' => '{user} ha creado y se ha asignado a sí mismo: {entityType} {entity}',
      'assign' => '{user} ha asignado: {entityType} {entity} a {assignee}',
      'assignThis' => '{user} ha asignado {entityType} a {assignee}',
      'assignYou' => '{user} te ha asignado {entityType} {entity} a ti',
      'assignThisVoid' => '{user} ha desasignado: {entityType}',
      'assignVoid' => '{user} ha desasignado: {entityType} {entity}',
      'assignThisSelf' => '{user} se ha asignado así mismo: {entityType}',
      'assignSelf' => '{user} se ha asignado así mismo: {entityType} {entity}',
      'assignMultiAdd' => '{user} asignó {entity} a {assignee}',
      'assignMultiRemove' => '{user} no asignó a {entity} de {removedAssignee}',
      'assignMultiAddRemove' => '{user} asignó {entity} a {assignee} y desasignó de {removedAssignee}',
      'assignMultiAddThis' => '{user} ha asignado {entityType} a {assignee}',
      'assignMultiRemoveThis' => '{user} desasignó este {entityType} de {removedAssignee}',
      'assignMultiAddRemoveThis' => '{user} asignó este {entityType} a {assignee} y lo desasignó de {removedAssignee}',
      'postThis' => '{user} ha publicado',
      'attachThis' => '{user} ha adjuntado',
      'statusThis' => '{user} ha actualizado el campo {field}',
      'updateThis' => '{user} ha actualizado: {entityType}',
      'createRelatedThis' => '{user} ha creado: {relatedEntityType} {relatedEntity}, enlazado a {entityType}',
      'createRelated' => '{user} ha creado: {relatedEntityType} {relatedEntity} enlazado a {entityType} {entity}',
      'relate' => '{user} ha enlazado {relatedEntityType} {relatedEntity} a {entityType} {entity}',
      'relateThis' => '{user} vinculado {relatedEntityType} {relatedEntity} con este {entityType}',
      'unrelate' => '{user} desvinculó {relatedEntityType} {relatedEntity} de {entityType} {entity}',
      'unrelateThis' => '{user} desvinculó {relatedEntityType} {relatedEntity} de este {entityType}',
      'emailReceivedFromThis' => 'Correo recibido de: {from}',
      'emailReceivedInitialFromThis' => 'Correo recibido de {from}, se ha creado: {entityType}',
      'emailReceivedThis' => 'Correo recibido',
      'emailReceivedInitialThis' => 'Correo recibido, se ha creado: {entityType}',
      'emailReceivedFrom' => 'Correo recibido de {from}, relacionado a: {entityType} {entity}',
      'emailReceivedFromInitial' => 'Correo recibido de {from}, se ha creado: {entityType} {entity}',
      'emailReceived' => 'El correo {email} ha sido recibido para el {entityType} {entity}',
      'emailReceivedInitial' => 'Correo recibido, se ha creado: {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Correo recibido de {from}, se ha creado: {entityType} {entity}',
      'emailSent' => '{by} ha enviado un correo relacionado a: {entityType} {entity}',
      'emailSentThis' => '{by} ha enviado un correo',
      'eventConfirmationAccepted' => '{invitee} aceptó participar en {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} rechazó participar en {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} tiene intenciones de participar en {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitado} aceptó participar',
      'eventConfirmationDeclinedThis' => '{invitee} declinó participar',
      'eventConfirmationTentativeThis' => '{invitee} tiene intenciones de participar'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí mismo'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí misma'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Enero',
        1 => 'Febrero',
        2 => 'Marzo',
        3 => 'Abril',
        4 => 'Mayo',
        5 => 'Junio',
        6 => 'Julio',
        7 => 'Agosto',
        8 => 'Septiembre',
        9 => 'Octubre',
        10 => 'Noviembre',
        11 => 'Diciembre'
      ],
      'monthNamesShort' => [
        0 => 'Ene',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dic'
      ],
      'dayNames' => [
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sábado'
      ],
      'dayNamesShort' => [
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Jue',
        5 => 'Vie',
        6 => 'Sab'
      ],
      'dayNamesMin' => [
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Ju',
        5 => 'Vi',
        6 => 'Sa'
      ]
    ],
    'durationUnits' => [
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Sta.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Está en',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Hoy',
        'past' => 'Pasado',
        'future' => 'Futuro',
        'currentMonth' => 'Mes Actual',
        'lastMonth' => 'Mes pasado',
        'nextMonth' => 'Siguiente mes',
        'currentQuarter' => 'Trimestre Actual',
        'lastQuarter' => 'Trimestre pasado',
        'currentYear' => 'Año Actual',
        'lastYear' => 'Año pasado',
        'lastSevenDays' => 'Últimos 7 Días',
        'lastXDays' => 'Últimos X Días',
        'nextXDays' => 'Próximos X Días',
        'ever' => 'Nunca',
        'isEmpty' => 'Está Vacío',
        'olderThanXDays' => 'Más de X Días',
        'afterXDays' => 'Después de X días',
        'currentFiscalYear' => 'Año fiscal actual',
        'lastFiscalYear' => 'Último año fiscal',
        'currentFiscalQuarter' => 'Trimestre fiscal actual',
        'lastFiscalQuarter' => 'Último trimestre fiscal'
      ],
      'searchRanges' => [
        'is' => 'Es',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'isOneOf' => 'Cualquiera de',
        'isFromTeams' => 'Es del equipo',
        'isNot' => 'No es',
        'isNotOneOf' => 'Ninguno de',
        'anyOf' => 'Cualquiera de',
        'allOf' => 'Todo de',
        'noneOf' => 'Ninguno de',
        'any' => 'Alguno'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Equivale',
        'like' => 'Es como (%)',
        'notLike' => 'No es como (%)',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina con',
        'contains' => 'Contiene',
        'notContains' => 'No contiene',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'notEquals' => 'No es igual',
        'anyOf' => 'Cualquiera de',
        'noneOf' => 'Ninguno de'
      ],
      'intSearchRanges' => [
        'equals' => 'Equivale',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
        'between' => 'Entre',
        'isEmpty' => 'Está Vacío',
        'isNotEmpty' => 'No está Vacío'
      ],
      'autorefreshInterval' => [
        0 => 'Ninguno',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos'
      ],
      'phoneNumber' => [
        'Mobile' => 'Teléfono móvil',
        'Office' => 'Oficina',
        'Fax' => 'Fax',
        'Home' => 'Hogar',
        'Other' => 'Otro'
      ],
      'saveConflictResolution' => [
        'current' => 'Actual',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Ventana emergente',
        'Email' => 'Correo'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente'
        ],
        'image' => [
          'image' => 'Visualización',
          'insert' => 'Insertar imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotar Izquierda',
          'floatRight' => 'Flotar Derecha',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastrar una imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de imagen',
          'remove' => 'Eliminar imagen'
        ],
        'link' => [
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desenlazar',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto a mostrar',
          'url' => '¿A que URL debería ir este enlace?',
          'openInNewWindow' => 'Abrir en nueva ventana'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Enlace al Video',
          'insert' => 'Insertar Video',
          'url' => '¿URL del Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)'
        ],
        'table' => [
          'table' => 'Tabla'
        ],
        'hr' => [
          'insert' => 'Insertar regla horizontal'
        ],
        'style' => [
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Cabecera 1',
          'h2' => 'Cabecera 2',
          'h3' => 'Cabecera 3',
          'h4' => 'Cabecera 4',
          'h5' => 'Cabecera 5',
          'h6' => 'Cabecera 6'
        ],
        'lists' => [
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada'
        ],
        'options' => [
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código'
        ],
        'paragraph' => [
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado'
        ],
        'color' => [
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de fondo',
          'foreground' => 'Color de fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Establecer transparente',
          'reset' => 'Resetear',
          'resetToDefault' => 'Restablecer a (por defecto)'
        ],
        'shortcut' => [
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento'
        ],
        'history' => [
          'undo' => 'Deshacer',
          'redo' => 'Rehacer'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'List',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Oscuro',
      'Light' => 'Ligero',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violeta',
      'Hazyblue' => 'Azul brumoso',
      'Glass' => 'Vidrio'
    ],
    'themeNavbars' => [
      'side' => 'Barra de navegación lateral',
      'top' => 'Barra de navegación superior'
    ],
    'fieldValidations' => [
      'required' => 'Requerido',
      'maxCount' => 'Conteo máximo',
      'maxLength' => 'Longitud máxima',
      'pattern' => 'Coincidencia de patrones',
      'emailAddress' => 'Dirección de correo válida',
      'phoneNumber' => 'Número de teléfono válido',
      'array' => 'Matriz',
      'arrayOfString' => 'Matriz de cadenas',
      'valid' => 'Validez',
      'noEmptyString' => 'Sin cadena vacía',
      'max' => 'Valor máximo',
      'min' => 'Valor mínimo'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Valor inválido.',
      'maxLength' => 'La longitud del valor excede el valor máximo.',
      'phone_valid' => 'El número de teléfono no es válido. Puede deberse a un código de país incorrecto o vacío.',
      'url_valid' => 'Valor de URL no válido.',
      'currency_valid' => 'Valor de importe no válido.',
      'currency_validCurrency' => 'El valor del código de moneda no es válido o no está permitido.',
      'varchar_pattern' => 'Es probable que el valor contenga caracteres no permitidos.',
      'email_emailAddress' => 'Valor de dirección de correo no válido.',
      'phone_phoneNumber' => 'Valor de número de teléfono no válido.',
      'datetimeOptional_valid' => 'Valor de fecha y hora no válido.',
      'datetime_valid' => 'Valor de fecha y hora no válido.',
      'date_valid' => 'Valor de fecha no válido.',
      'enum_valid' => 'Valor de enumeración no válido. Debe ser una de las opciones de enumeración definidas. Solo se permite un valor vacío si el campo tiene una opción vacía.',
      'int_valid' => 'Valor de número entero no válido.',
      'float_valid' => 'Valor de número no válido.',
      'multiEnum_valid' => 'Valor multienumeración no válido. Los valores deben ser una de las opciones de campo definidas.'
    ],
    'navbarTabs' => [
      'Business' => 'Negocios',
      'Marketing' => 'Marketing',
      'Support' => 'Soporte',
      'CRM' => 'CRM',
      'Activities' => 'Actividades'
    ],
    'wysiwygLabels' => [
      'cell' => 'Celda',
      'align' => 'Alinear',
      'width' => 'Ancho',
      'height' => 'Alto',
      'borderWidth' => 'Ancho del borde',
      'borderColor' => 'Color del borde',
      'cellPadding' => 'Relleno de celdas',
      'backgroundColor' => 'Color de fondo',
      'verticalAlign' => 'Alineación vertical'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Izquierda',
        'center' => 'Centro',
        'right' => 'Derecha'
      ],
      'verticalAlign' => [
        'top' => 'Arriba',
        'middle' => 'Medio',
        'bottom' => 'Abajo'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detalle'
    ],
    'strings' => [
      'yesterdayShort' => 'Ayer'
    ],
    'reactions' => [
      'Smile' => 'Me pone contento',
      'Surprise' => 'Me sorprende',
      'Laugh' => 'Me hace reír',
      'Meh' => 'Me da lo mismo',
      'Sad' => 'Me entristece',
      'Love' => 'Me encanta',
      'Like' => 'Me gusta',
      'Dislike' => 'No me gusta'
    ],
    'recordActions' => [
      'create' => 'Crear',
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Historia'
    ],
    'tabs' => [
      'Stream' => 'Historia'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Correos'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Crear carpeta'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'Nueva importación con los mismos parámetros',
      'Revert Import' => 'Revertir Importación',
      'Return to Import' => 'Regreso a Importar',
      'Run Import' => 'Ejecutar importación',
      'Back' => 'Anterior',
      'Field Mapping' => 'Mapeo de Campos',
      'Default Values' => 'Valores por defecto',
      'Add Field' => 'Añadir Campo',
      'Created' => 'Creado',
      'Updated' => 'Actualizado',
      'Result' => 'Resultado',
      'Show records' => 'Mostrar registros',
      'Remove Duplicates' => 'Eliminar Duplicados',
      'importedCount' => 'Importado (recuento)',
      'duplicateCount' => 'Duplicados (recuento)',
      'updatedCount' => 'Actualizado (recuento)',
      'Create Only' => 'Solo crear',
      'Create and Update' => 'Crear y actualizar',
      'Update Only' => 'Solo actualizar',
      'Update by' => 'Actualizado por',
      'Set as Not Duplicate' => 'Establecer como No Duplicado',
      'File (CSV)' => 'Archivo (CSV)',
      'First Row Value' => 'Valor de la primera fila',
      'Skip' => 'Omitir',
      'Header Row Value' => 'Campo del sistema',
      'Field' => 'Columnas del archivo',
      'What to Import?' => '¿Qué va a importar?',
      'Entity Type' => 'Tipo de entidad',
      'What to do?' => '¿Qué hacer?',
      'Properties' => 'Propiedades',
      'Header Row' => '¿Tiene una fila de Encabezado?',
      'Person Name Format' => 'Formato del nombre de la persona',
      'John Smith' => 'Juan Pérez',
      'Smith John' => 'Pérez Juan',
      'Smith, John' => 'Pérez, Juan',
      'Field Delimiter' => 'Delimitador de campo',
      'Date Format' => 'Formato de fecha',
      'Decimal Mark' => 'Símbolo Decimal',
      'Text Qualifier' => 'Delimitador de texto',
      'Time Format' => 'Formato de hora',
      'Currency' => 'Moneda',
      'Preview' => 'Vista previa',
      'Next' => 'Siguiente',
      'Step 1' => 'Paso 1',
      'Step 2' => 'Paso 2',
      'Double Quote' => 'Comillas dobles',
      'Single Quote' => 'Comillas simples',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
      'Skip searching for duplicates' => 'Omitir la búsqueda de duplicados',
      'Timezone' => 'Zona horaria',
      'Remove Import Log' => 'Eliminar registro de importación',
      'New Import' => 'Nueva importación',
      'Import Results' => 'Importar resultados',
      'Run Manually' => 'Ejecutar manualmente',
      'Silent Mode' => 'Modo silencioso',
      'Export' => 'Exportar'
    ],
    'messages' => [
      'importRunning' => 'Importación en ejecución...',
      'noErrors' => 'Sin errores',
      'utf8' => 'Debe ser codificado en UTF-8',
      'duplicatesRemoved' => 'Duplicados eliminados',
      'inIdle' => 'Ejecutar en segundo plano (para gran cantidad de datos, vía cron)',
      'revert' => 'Esto eliminará todos los registros importados de forma permanente.',
      'removeDuplicates' => 'Esto eliminará permanentemente todos los registros importados que fueron reconocidos como duplicados.',
      'confirmRevert' => 'Esto eliminará todos los registros importados de forma permanente. ¿Estás seguro?',
      'confirmRemoveDuplicates' => 'Esto eliminará permanentemente todos los registros importados que fueron reconocidos como duplicados. ¿Estás seguro?',
      'confirmRemoveImportLog' => 'Esto eliminará el registro de importación. Se conservarán todos los registros importados. No podrá revertir los resultados de la importación. ¿Está seguro?',
      'removeImportLog' => 'Esto eliminará el registro de importación. Todos los registros importados se mantendrán. Úselo si está seguro de que la importación está bien.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Código telefónico del país'
    ],
    'fields' => [
      'file' => 'Archivo',
      'entityType' => 'Tipo de entidad',
      'imported' => 'Registros Importados',
      'duplicates' => 'registros Duplicados',
      'updated' => 'registros Actualizados',
      'status' => 'Estado'
    ],
    'links' => [
      'errors' => 'Errores'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Falló',
        'Standby' => 'Apoyar',
        'Pending' => 'Pendiente',
        'In Process' => 'En proceso',
        'Complete' => 'Completo'
      ],
      'personNameFormat' => [
        'f l' => 'Primero último',
        'l f' => 'Último primero',
        'f m l' => 'Primero Segundo Nombre Apellido',
        'l f m' => 'Último primero medio',
        'l, f' => 'Último primero'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Comando para ejecutar (desde CLI)',
      'saveAsDefault' => 'Guardar por defecto'
    ],
    'tooltips' => [
      'manualMode' => 'Si está marcado, deberá ejecutar la importación manualmente desde CLI. El comando se mostrará después de configurar la importación.',
      'silentMode' => 'Se omitirá la mayoría de los scripts posteriores a guardar, no se crearán notas de transmisión. La importación se ejecutará más rápido.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Tipo',
      'validationFailures' => 'Fallos de validación',
      'import' => 'Importar',
      'rowIndex' => 'Índice de fila',
      'exportRowIndex' => 'Índice de fila de exportación',
      'lineNumber' => 'Número de línea',
      'exportLineNumber' => 'Número de línea de exportación',
      'row' => 'Fila',
      'entityType' => 'Tipo de entidad'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validación',
        'Access' => 'Acceso',
        'Not-Found' => 'No encontrado'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'Un número de línea en el CSV original.',
      'exportLineNumber' => 'Un número de línea en el CSV de exportación.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Dirección de correo',
      'team' => 'Equipo objetivo',
      'status' => 'Estado',
      'assignToUser' => 'Asignar al usuario',
      'host' => 'Servidor',
      'username' => 'Nombre de usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas sincronizadas',
      'trashFolder' => 'Carpeta de papelera',
      'security' => 'Seguridad',
      'createCase' => 'Crear ticket',
      'reply' => 'Respuesta automática',
      'caseDistribution' => 'Distribución de tickets',
      'replyEmailTemplate' => 'Plantilla de respuesta de correo',
      'replyFromAddress' => 'Responder de (dirección)',
      'replyToAddress' => 'Responder a (dirección)',
      'replyFromName' => 'Respuesta de (nombre):',
      'targetUserPosition' => 'Asigna a usuarios por puesto',
      'fetchSince' => 'Traer correos desde',
      'addAllTeamUsers' => 'Para todos los usuarios del equipo',
      'teams' => 'Equipos',
      'sentFolder' => 'Carpeta de enviados',
      'storeSentEmails' => 'Almacenar correos enviados',
      'keepFetchedEmailsUnread' => 'Mantenga los correos recuperados como no leídos',
      'connectedAt' => 'Conectado en',
      'excludeFromReply' => 'Excluir de la respuesta',
      'useImap' => 'Obtener correos',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Autentificación SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpAuthMechanism' => 'Mecanismo de autenticación SMTP',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP',
      'fromName' => 'De (nombre):',
      'smtpIsShared' => 'SMTP ¿Es compartido?',
      'smtpIsForMassEmail' => 'SMTP es para envíos masivos',
      'groupEmailFolder' => 'Carpeta de correo grupal',
      'isSystem' => '¿Es sistema?'
    ],
    'tooltips' => [
      'isSystem' => 'Es la cuenta de correo del sistema.',
      'useSmtp' => 'La capacidad de enviar correos.',
      'reply' => 'Notifique a los remitentes de correo que han recibido sus mensajes.

Solo un correo será enviado a un destinatario particular durante un período de tiempo para evitar bucles.',
      'createCase' => 'Automaticamente crear un ticket de los correos entrantes.',
      'replyToAddress' => 'Especifique la dirección de correo de este buzón para hacer que las respuestas vegan aquí.',
      'caseDistribution' => '¿Cómo serán asignados a los tickets? Asignados directamente a un usuario o al equipo.',
      'assignToUser' => 'Los tickets serán asignados al usuario:',
      'team' => 'Los tickets serán asignados al siguiente equipo:',
      'teams' => 'Los correos serán asignados a estos equipos:',
      'targetUserPosition' => 'Los usuarios con los puestos especificados recibirán los tickets.',
      'addAllTeamUsers' => 'Los correos aparecerán en la bandeja de entrada de todos los usuarios de los equipos especificados.',
      'monitoredFolders' => 'Las carpetas deben estar separadas por comas.',
      'smtpIsShared' => 'Si se marca, entonces los usuarios podrán enviar correos usando este SMTP. La disponibilidad está controlada por Roles a través de los permisos de la cuenta de correo grupal.',
      'smtpIsForMassEmail' => 'Si está marcado, SMTP estará disponible para correo masivo.',
      'storeSentEmails' => 'Los correos enviados se almacenarán en el servidor IMAP.',
      'groupEmailFolder' => 'Coloque los correos entrantes en una carpeta grupal.',
      'excludeFromReply' => 'Al responder correos enviados a la dirección de esta cuenta, esta no se añadirá a la sección de CC.

Ten en cuenta que, al habilitar este parámetro, la dirección de esta cuenta estará disponible para los usuarios con acceso para enviar correos.'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Correos',
      'assignToUser' => 'Asignar al usuario',
      'groupEmailFolder' => 'Carpeta de correo grupal'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ],
      'caseDistribution' => [
        '' => 'Ninguno',
        'Direct-Assignment' => 'Asignación directa',
        'Round-Robin' => 'Todos contra todos',
        'Least-Busy' => 'Menos ocupado'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'Entrar',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Crear cuenta grupal',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'imapNotConnected' => 'No se pudo conectar al grupo [cuenta IMAP](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Activado',
      'clientId' => 'ID Cliente',
      'clientSecret' => 'Secreto del cliente',
      'redirectUri' => 'Redireccionar URI',
      'apiKey' => 'Clave de API',
      'siteKey' => 'Clave del sitio',
      'secretKey' => 'Clave secreta',
      'scoreThreshold' => 'Umbral de puntuación',
      'mapId' => 'Map ID'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps',
      'GoogleReCaptcha' => 'Google reCAPTCHA'
    ],
    'messages' => [
      'selectIntegration' => 'Seleccionar una integración en menú',
      'noIntegrations' => 'No hay integraciones disponibles'
    ],
    'help' => [
      'GoogleReCaptcha' => 'Obtenga la clave del sitio y la clave secreta de [Google](https://www.google.com/recaptcha/).',
      'Google' => '**Obtenga las credenciales de OAuth 2.0 de la Consola de desarrolladores de Google.**

Visite [Google Developers Console](https://console.developers.google.com/project) para obtener las credenciales de OAuth 2.0, como un ID de cliente y un secreto de cliente que son conocidos tanto por Google como por la aplicación EspoCRM.',
      'GoogleMaps' => 'Obtener Clave de API [aquí](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Estado',
      'executeTime' => 'Ejecutar a',
      'executedAt' => 'Ejecutado en',
      'startedAt' => 'Empezó a las',
      'attempts' => 'Intentos restantes',
      'failedAttempts' => 'Intentos Fallidos',
      'serviceName' => 'Servicio',
      'method' => 'Método',
      'methodName' => 'Método',
      'scheduledJob' => 'Tarea Programada',
      'scheduledJobJob' => 'Nombre de trabajo programado',
      'data' => 'Datos',
      'targetType' => 'Tipo de objetivo',
      'targetId' => 'ID Objetivo',
      'number' => 'Numero',
      'queue' => 'Cola',
      'group' => 'Grupo',
      'className' => 'Nombre de la clase',
      'targetGroup' => 'Grupo objetivo',
      'job' => 'Trabajo'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Success' => 'Exitoso',
        'Running' => 'Corriendo',
        'Failed' => 'Falló'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Ancho',
      'link' => 'Enlace',
      'notSortable' => 'No ordenable',
      'align' => 'Alinear',
      'panelName' => 'Nombre del Panel',
      'style' => 'Estilo',
      'sticked' => 'Quédate arriba',
      'isMuted' => 'Color apagado',
      'isLarge' => 'Tamaño de fuente grande',
      'hidden' => 'Oculto',
      'noLabel' => 'Sin etiqueta',
      'dynamicLogicVisible' => 'Condiciones que hacen visible el panel',
      'dynamicLogicStyled' => 'Condiciones que hacen que se aplique el estilo',
      'tabLabel' => 'Etiqueta de pestaña',
      'tabBreak' => 'Salto de pestaña',
      'noteText' => 'Texto de la nota',
      'noteStyle' => 'Estilo de nota'
    ],
    'options' => [
      'align' => [
        'left' => 'Izquierda',
        'right' => 'Derecha'
      ],
      'style' => [
        'default' => 'Borrador',
        'success' => 'Exito',
        'danger' => 'Peligro',
        'info' => 'Información',
        'warning' => 'Advertencia',
        'primary' => 'Principal'
      ]
    ],
    'labels' => [
      'New panel' => 'Nuevo panel',
      'Layout' => 'Diseño'
    ],
    'messages' => [
      'alreadyExists' => 'El diseño `{name}` ya existe.',
      'createInfo' => 'Los paneles de relaciones pueden utilizar diseños de listas personalizados.',
      'cantBeEmpty' => 'El diseño no puede estar vacío.',
      'fieldsIncompatible' => 'Los campos no pueden estar juntos en el diseño: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'Texto que se mostrará en el panel. Compatible con Markdown.',
      'tabBreak' => 'Una pestaña separada para el panel y todos los paneles siguientes hasta el siguiente salto de pestaña.',
      'noLabel' => 'No mostrar una etiqueta de columna en el encabezado.',
      'notSortable' => 'Desactiva la capacidad de ordenar por columna.',
      'width' => 'Ancho de columna. Se recomienda tener una columna sin ancho especificado; normalmente debería ser el campo *Nombre*.',
      'sticked' => 'El panel se pegará al panel superior. Sin espacio entre paneles.',
      'hiddenPanel' => 'Necesita hacer clic en "mostrar más" para ver el panel.',
      'panelStyle' => 'Un color del panel.',
      'dynamicLogicVisible' => 'Si se configura, el panel se ocultará a menos que se cumpla la condición.',
      'dynamicLogicStyled' => 'Se aplicará un color si se cumple una condición específica. El color se define mediante el parámetro *Estilo*.',
      'link' => 'Si se marca, se mostrará un valor de campo como un enlace que apunta a la vista detallada del registro. Por lo general, se usa para los campos *Name*.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Diseños'
    ],
    'labels' => [
      'Create LayoutSet' => 'Crear conjunto de diseño',
      'Edit Layouts' => 'Editar diseños'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Nombre',
      'campaign' => 'Campaña',
      'isActive' => 'Está activo',
      'subscribeToTargetList' => 'Suscríbase a la lista de objetivos',
      'subscribeContactToTargetList' => 'Suscribir contacto si existe',
      'targetList' => 'Lista de objetivos',
      'fieldList' => 'Campos de carga útil',
      'optInConfirmation' => 'Doble confirmación de suscripción',
      'optInConfirmationEmailTemplate' => 'Plantilla de email de cofirmación de suscripción',
      'optInConfirmationLifetime' => 'Tiempo de vida del enlace de confirmación de suscripción (horas)',
      'optInConfirmationSuccessMessage' => 'Texto para mostrar después de la confirmación de correo',
      'leadSource' => 'Toma de contacto del posible cliente',
      'apiKey' => 'Clave de API',
      'targetTeam' => 'Equipo objetivo',
      'exampleRequestMethod' => 'Método',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Carga útil',
      'exampleRequestHeaders' => 'Cabeceras',
      'createLeadBeforeOptInConfirmation' => 'Crear cliente potencial antes de la confirmación',
      'skipOptInConfirmationIfSubscribed' => 'Omitir confirmación si el cliente potencial ya está en la lista de objetivos',
      'smtpAccount' => 'Cuenta SMTP',
      'inboundEmail' => 'Cuenta de correo grupal',
      'duplicateCheck' => 'Duplicar verificación',
      'phoneNumberCountry' => 'Código telefónico del país',
      'fieldParams' => 'Parámetros de campo',
      'formId' => 'ID del formulario',
      'formEnabled' => 'Formulario web',
      'formUrl' => 'URL del formulario',
      'formTitle' => 'Título del formulario',
      'formTheme' => 'Tema del formulario',
      'formSuccessText' => 'Texto a mostrar después de enviar el formulario',
      'formText' => 'Texto para mostrar en el formulario',
      'formSuccessRedirectUrl' => 'URL a la que redirigir después de enviar el formulario',
      'formLanguage' => 'Lenguaje utilizado en el formulario',
      'formFrameAncestors' => 'Hosts permitidos para incrustar formularios',
      'formCaptcha' => 'Utilice Captcha'
    ],
    'links' => [
      'targetList' => 'Lista de objetivos',
      'campaign' => 'Campaña',
      'optInConfirmationEmailTemplate' => 'Plantilla de email de cofirmación de suscripción',
      'targetTeam' => 'Equipo objetivo',
      'inboundEmail' => 'Cuenta de correo grupal',
      'logRecords' => 'Registro'
    ],
    'labels' => [
      'Create LeadCapture' => 'Crear punto de entrada',
      'Generate New API Key' => 'Generar una nueva clave de API',
      'Request' => 'Solicitud',
      'Confirm Opt-In' => 'Confirmar suscripción',
      'Generate New Form ID' => 'Generar nuevo ID de formulario',
      'Web Form' => 'Formulario web'
    ],
    'messages' => [
      'generateApiKey' => 'Crear nueva clave de API',
      'optInConfirmationExpired' => 'El enlace de confirmación de suscripción ha caducado.',
      'optInIsConfirmed' => 'Correo está confirmado.'
    ],
    'tooltips' => [
      'formCaptcha' => 'Para poder utilizar Captcha, debes configurarlo en **Administración** > **Integraciones**.',
      'optInConfirmationSuccessMessage' => 'Markdown es soportado'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Número',
      'data' => 'Datos',
      'target' => 'Objetivo',
      'leadCapture' => 'Captura de clientes potenciales',
      'createdAt' => 'Entró en',
      'isCreated' => '¿Se creó el cliente potencial?'
    ],
    'links' => [
      'leadCapture' => 'Captura de clientes potenciales',
      'target' => 'Objetivo'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Estado',
      'processedCount' => 'Recuento procesado'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Running' => 'En ejecución',
        'Success' => 'Éxito',
        'Failed' => 'Fallido'
      ]
    ],
    'messages' => [
      'infoText' => 'La acción masiva se está procesando en modo inactivo por cron. Puede tardar un tiempo en completarse. Cerrar este cuadro de diálogo modal no afectará el proceso de ejecución.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Entrada',
      'attachments' => 'Adjuntos',
      'targetType' => 'Objetivo',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'portals' => 'Portales',
      'type' => 'Tipo',
      'isGlobal' => 'Es global',
      'isInternal' => 'Es Interno (para usuarios internos)',
      'isPinned' => 'Está fijado',
      'related' => 'Relacionado',
      'createdByGender' => 'Creado por género',
      'data' => 'Datos',
      'number' => 'Número'
    ],
    'filters' => [
      'all' => 'Todos',
      'posts' => 'Entradas',
      'updates' => 'Actualizaciones',
      'activity' => 'Actividad'
    ],
    'options' => [
      'targetType' => [
        'self' => 'Sí mismo',
        'users' => 'Usuarios',
        'teams' => 'Equipos',
        'all' => 'Todos los usuarios internos',
        'portals' => 'Usuarios del portal'
      ],
      'type' => [
        'Post' => 'Entrada',
        'Create' => 'Crear',
        'CreateRelated' => 'Crear relacionado',
        'Update' => 'Actualizar',
        'Status' => 'Estado',
        'Assign' => 'Asignar',
        'Relate' => 'Relatar',
        'Unrelate' => 'Desvincularse',
        'EmailReceived' => 'Correo recibido',
        'EmailSent' => 'Correo enviado'
      ]
    ],
    'labels' => [
      'View Posts' => 'Ver publicaciones',
      'View Attachments' => 'Ver archivos adjuntos',
      'View Activity' => 'Ver actividad',
      'Pin' => 'Fijar',
      'Unpin' => 'Desfijar',
      'Pinned' => 'Fijado',
      'Quote Reply' => 'Citar Responder'
    ],
    'messages' => [
      'writeMessage' => 'Escriba su mensaje aquí',
      'pinnedMaxCountExceeded' => 'No se pueden anclar más notas. El número máximo permitido es {count}.'
    ],
    'links' => [
      'portals' => 'Portales',
      'attachments' => 'Archivos adjuntos',
      'superParent' => 'Super padre',
      'related' => 'Relacionado'
    ],
    'otherFields' => [
      'to' => 'A'
    ]
  ],
  'OAuthAccount' => [
    'labels' => [
      'Create OAuthAccount' => 'Crear una cuenta OAuth',
      'Connection' => 'Conexión'
    ],
    'fields' => [
      'provider' => 'Proveedor',
      'hasAccessToken' => 'Tiene token de acceso',
      'user' => 'Usuario',
      'providerIsActive' => 'El proveedor está activo',
      'data' => 'Datos'
    ],
    'links' => [
      'provider' => 'Proveedor'
    ]
  ],
  'OAuthProvider' => [
    'labels' => [
      'Create OAuthProvider' => 'Crear proveedor de OAuth'
    ],
    'fields' => [
      'isActive' => 'Está activo',
      'clientId' => 'ID de cliente',
      'clientSecret' => 'Secreto del cliente',
      'authorizationEndpoint' => 'Punto final de autorización',
      'tokenEndpoint' => 'Punto final del token',
      'authorizationRedirectUri' => 'URI de redirección de autorización',
      'scopes' => 'Ámbitos',
      'scopeSeparator' => 'Separador de alcance',
      'hasAccessToken' => 'Crear proveedor de OAuth',
      'authorizationPrompt' => 'Solicitud de autorización',
      'authorizationParams' => 'Parámetros de autorización'
    ],
    'links' => [
      'accounts' => 'Cuentas'
    ],
    'tooltips' => [
      'authorizationParams' => 'Parámetros de consulta adicionales que se enviarán al punto final de autorización. Especificados en formato JSON.'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Escribe',
      'optOut' => 'Opted Out',
      'invalid' => 'Inválido',
      'numeric' => 'Valor numérico'
    ],
    'presetFilters' => [
      'orphan' => 'Huérfano'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Nombre',
      'logo' => 'Logotipo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Está activo',
      'isDefault' => 'Portal por defecto',
      'tabList' => 'Lista de pestañas',
      'applicationName' => 'Nombre de la aplicación',
      'quickCreateList' => 'Lista de creación rápida',
      'companyLogo' => 'Logotipo',
      'theme' => 'Tema',
      'language' => 'Idioma',
      'dashboardLayout' => 'Diseño del escritorio',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'defaultCurrency' => 'Moneda por defecto',
      'layoutSet' => 'Conjunto de diseño',
      'authenticationProvider' => 'Proveedor de autenticación',
      'customUrl' => 'URL personalizada',
      'customId' => 'ID personalizado',
      'authTokenLifetime' => 'Duración del token de autorización (horas)',
      'authTokenMaxIdleTime' => 'Tiempo máximo de inactividad del token de autenticación (horas)'
    ],
    'links' => [
      'users' => 'Usuarios',
      'portalRoles' => 'Roles',
      'layoutSet' => 'Conjunto de diseño',
      'authenticationProvider' => 'Proveedor de autenticación',
      'notes' => 'Notas',
      'articles' => 'Artículos de la base de conocimiento'
    ],
    'tooltips' => [
      'layoutSet' => 'Proporciona la capacidad de tener diseños que difieran de los estándar.',
      'portalRoles' => 'Los roles del portal indicados se aplicarán a todos los usuarios de este portal.'
    ],
    'labels' => [
      'Create Portal' => 'Crear portal',
      'User Interface' => 'Interfaz del Usuario',
      'General' => 'General',
      'Settings' => 'Ajustes'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Permisos de exportación',
      'massUpdatePermission' => 'Permiso de actualización masiva',
      'data' => 'Datos',
      'fieldData' => 'Campo de datos'
    ],
    'links' => [
      'users' => 'Usuarios'
    ],
    'labels' => [
      'Access' => 'Acceder',
      'Create PortalRole' => 'Crear rol del portal',
      'Scope Level' => 'Nivel de acceso a entidades',
      'Field Level' => 'Nivel de acceso a campos'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Crear usuario del portal'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por defecto',
      'currencyList' => 'Lista de monedas',
      'language' => 'Idioma',
      'exportDelimiter' => 'Separador de campos',
      'receiveAssignmentEmailNotifications' => 'Recibir notificaciones por correo al ser asignado',
      'receiveMentionEmailNotifications' => 'Notificaciones por correo acerca de menciones en los mensajes',
      'receiveStreamEmailNotifications' => 'Notificaciones por correo sobre los mensajes y actualizaciones de estado',
      'assignmentNotificationsIgnoreEntityTypeList' => 'Asignación de notificaciones del sistema',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Notificaciones de asignación de correo',
      'reactionNotifications' => 'Notificaciones en la aplicación sobre reacciones',
      'autoFollowEntityTypeList' => 'Seguir automaticamente (global)',
      'signature' => 'Firma de correo',
      'dashboardTabList' => 'Lista de pestañas',
      'defaultReminders' => 'Recordatorios por defecto',
      'defaultRemindersTask' => 'Recordatorios predeterminados para tareas',
      'theme' => 'Tema',
      'pageContentWidth' => 'Ancho del contenido',
      'useCustomTabList' => 'Lista de pestañas personalizadas',
      'addCustomTabs' => 'Agregar pestañas personalizadas',
      'tabList' => 'Lista de pestañas',
      'emailReplyToAllByDefault' => 'Correo: responder a todos por defecto',
      'dashboardLayout' => 'Diseño del escritorio',
      'dashboardLocked' => 'Bloquear el tablero',
      'emailReplyForceHtml' => 'Correo: responder en formato HTML',
      'doNotFillAssignedUserIfNotRequired' => 'No precompletar usuario asignado en la creación de registros',
      'followEntityOnStreamPost' => 'Seguimiento automático después de publicar en la historia',
      'followCreatedEntities' => 'Seguimiento automático de registros creados',
      'followCreatedEntityTypeList' => 'Seguimiento automático de registros creados de tipos de entidades específicos',
      'emailUseExternalClient' => 'Use un cliente de correo externo',
      'textSearchStoringDisabled' => 'Deshabilitar el almacenamiento del filtro de texto',
      'calendarSlotDuration' => 'Duración del espacio del calendario',
      'calendarScrollHour' => 'Calendario desplazarse hasta la hora'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Domingo',
        1 => 'Lunes'
      ],
      'pageContentWidth' => [
        '' => 'Normal',
        'Wide' => 'Ancho'
      ]
    ],
    'labels' => [
      'Notifications' => 'Notificaciones',
      'User Interface' => 'Interfaz de usuario',
      'Misc' => 'Misceláneos',
      'Locale' => 'Localización',
      'Reset Dashboard to Default' => 'Reiniciar al escritorio por defecto'
    ],
    'tooltips' => [
      'addCustomTabs' => 'Si se marca esta opción, las pestañas personalizadas se añadirán a las predeterminadas. De lo contrario, se usarán en lugar de las predeterminadas.',
      'autoFollowEntityTypeList' => 'Siguirá automáticamente todos los registros nuevos (creados por cualquier usuario) de los tipos de entidad seleccionados. Para poder ver información en la historia y recibir notificaciones sobre todos los registros en el sistema.',
      'doNotFillAssignedUserIfNotRequired' => 'Cuando cree un registro, el usuario asignado no se completará con su propio usuario a menos que el campo sea obligatorio.',
      'followCreatedEntities' => 'Al crear nuevos registros, se seguirán automáticamente incluso si se asignan a otro usuario.',
      'followCreatedEntityTypeList' => 'Al crear nuevos registros de los tipos de entidades seleccionados, se seguirán automáticamente incluso si se asignan a otro usuario.'
    ],
    'tabFields' => [
      'label' => 'Etiqueta',
      'iconClass' => 'Ícono',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Nombre',
      'roles' => 'Roles',
      'assignmentPermission' => 'Asignación de permisos',
      'userPermission' => 'Permisos de Usuario',
      'messagePermission' => 'Permiso de mensaje',
      'portalPermission' => 'Permisos del portal',
      'groupEmailAccountPermission' => 'Permiso de la cuenta de correo grupal',
      'exportPermission' => 'Permisos de exportación',
      'massUpdatePermission' => 'Permiso de actualización masiva',
      'followerManagementPermission' => 'Permiso de gestión de seguidores',
      'dataPrivacyPermission' => 'Permiso de privacidad de datos',
      'auditPermission' => 'Permiso de auditoría',
      'mentionPermission' => 'Permiso de mencionar',
      'userCalendarPermission' => 'Permiso de calendario de usuario',
      'data' => 'Datos',
      'fieldData' => 'Campo de datos'
    ],
    'links' => [
      'users' => 'Usuarios',
      'teams' => 'Equipos'
    ],
    'tooltips' => [
      'messagePermission' => 'Permite enviar mensajes a otros usuarios.

* Todos: permite enviar mensajes a todos.
* Equipo: permite enviar mensajes solo a compañeros.
* No: no permite enviar mensajes.',
      'assignmentPermission' => 'Permite asignar registros a otros usuarios.

* Todos: sin restricciones
* Equipo: solo se puede asignar a compañeros
* No: solo se puede asignar a uno mismo',
      'userPermission' => 'Permite ver el historial de otros usuarios. Permite a los usuarios ver los niveles de acceso que tienen otros usuarios para registros específicos.',
      'userCalendarPermission' => 'Permite ver calendarios de otros usuarios.',
      'portalPermission' => 'Acceso a la información del portal, capacidad de publicar mensajes para los usuarios del portal.',
      'groupEmailAccountPermission' => 'Acceso a cuentas de correo grupales, capacidad de enviar correos desde el SMTP grupal.',
      'exportPermission' => 'Permite exportar registros.',
      'massUpdatePermission' => 'La capacidad de realizar actualizaciones masivas de registros.',
      'followerManagementPermission' => 'Permite gestionar seguidores de registros específicos.',
      'dataPrivacyPermission' => 'Permite ver y borrar datos personales.',
      'auditPermission' => 'Permite ver el registro de auditoría.',
      'mentionPermission' => 'Permite mencionar a otros usuarios en la historia.

* Todos: se pueden mencionar a todos
* Equipo: solo se pueden mencionar a compañeros de equipo
* No: no se pueden mencionar'
    ],
    'labels' => [
      'Access' => 'Acceso',
      'Create Role' => 'Crear rol',
      'Scope Level' => 'Nivel de acceso a entidades',
      'Field Level' => 'Nivel de acceso a campos'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'sin establecer',
        'enabled' => 'activado',
        'disabled' => 'desactivado'
      ],
      'levelList' => [
        'all' => 'Todos',
        'team' => 'Equipo',
        'account' => 'Cuenta',
        'contact' => 'Contacto',
        'own' => 'Propio',
        'no' => 'No',
        'yes' => 'Si',
        'not-set' => 'Sin establecer'
      ]
    ],
    'actions' => [
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Historia',
      'create' => 'Crear'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Todos los cambios en el control de acceso serán aplicacados después de limpiar la caché'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'job' => 'Trabajo',
      'scheduling' => 'Programación (notación CRONTab)'
    ],
    'links' => [
      'log' => 'Registro'
    ],
    'labels' => [
      'As often as possible' => 'Tan seguido como sea posible',
      'Create ScheduledJob' => 'Crear tarea programada'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Limpiar',
        'CheckInboundEmails' => 'Comprobar cuentas de correo grupales',
        'CheckEmailAccounts' => 'Comprobar cuentas de correo personales',
        'SendEmailReminders' => 'Enviar Recordatorios por Email',
        'AuthTokenControl' => 'Control del Token de Autenticación',
        'SendEmailNotifications' => 'Enviar notificaciones por correo',
        'CheckNewVersion' => 'Verificar nueva versión',
        'ProcessWebhookQueue' => 'Procesar cola de webhook',
        'SendScheduledEmails' => 'Enviar correos programados',
        'ProcessMassEmail' => 'Enviar correo masivo',
        'ControlKnowledgeBaseArticleStatus' => 'Controlar estado de los artículos de la base de conocimiento'
      ],
      'cronSetup' => [
        'linux' => 'Nota: añada esta línea al archivo crontab para que EspoCRM pueda ejecutar las tareas programadas:',
        'mac' => 'Nota: añada esta línea al archivo crontab para que EspoCRM pueda ejecutar las tareas programadas:',
        'windows' => 'Nota: Crear un archivo por lotes con los siguientes comandos para ejecutar tareas programadas de EspoCRM usando tareas programadas de Windows:',
        'default' => 'Nota: Agregar este comando a Cron Job (Tarea Programada):'
      ],
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Notación crontab. Define la frecuencia de ejecución de trabajos.

`* / 5 * * * *` - cada 5 minutos

`0 * / 2 * * *` - cada 2 horas

`30 1 * * *` - a las 01:30 una vez al día

`0 0 1 * *` - el primer día del mes'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Estado',
      'executionTime' => 'Fecha de ejecución',
      'target' => 'Objetivo'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Usar caché',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por defecto',
      'baseCurrency' => 'Moneda Base',
      'currencyRates' => 'Tipos de cambio',
      'currencyList' => 'Lista de monedas',
      'language' => 'Idioma',
      'companyLogo' => 'Logo de la empresa',
      'smsProvider' => 'Proveedor de SMS',
      'outboundSmsFromNumber' => 'SMS desde el número',
      'emailAddress' => 'Correo',
      'outboundEmailFromName' => 'De (nombre):',
      'outboundEmailFromAddress' => 'Dirección de correo del sistema',
      'outboundEmailIsShared' => '¿Es compartido?',
      'emailAddressLookupEntityTypeList' => 'Ámbitos de búsqueda de direcciones de correo',
      'emailAddressSelectEntityTypeList' => 'Seleccionar ámbitos de dirección de correo',
      'recordsPerPage' => 'Registros por página',
      'recordsPerPageSmall' => 'Registros por página (pequeño)',
      'recordsPerPageSelect' => 'Registros por página (Seleccionar)',
      'recordsPerPageKanban' => 'Registros por página (Kanban)',
      'tabList' => 'Lista de pestañas',
      'quickCreateList' => 'Lista de creación rápida',
      'exportDelimiter' => 'Separador de campos',
      'globalSearchEntityList' => 'Búsqueda Global: Lista de entidades',
      'authenticationMethod' => 'Método de autenticación',
      'ldapHost' => 'Servidor',
      'ldapPort' => 'Puerto',
      'ldapAuth' => '¿Requiere autenticación?',
      'ldapUsername' => 'Nombre de usuario',
      'ldapPassword' => 'Contraseña',
      'ldapBindRequiresDn' => 'Bind Necesita Nd (Nombre Dominio)',
      'ldapBaseDn' => 'ND Base',
      'ldapAccountCanonicalForm' => 'Forma canónica de la cuenta',
      'ldapAccountDomainName' => 'Nombre de Dominio de la Cuenta',
      'ldapTryUsernameSplit' => 'Intentar dividir el nombre de Usuario',
      'ldapPortalUserLdapAuth' => 'Use la autenticación LDAP para usuarios del portal',
      'ldapCreateEspoUser' => 'Crear usuario en EspoCRM',
      'ldapSecurity' => 'Seguridad',
      'ldapUserLoginFilter' => 'Usar Filtro en el Login',
      'ldapAccountDomainNameShort' => 'Nombre Dominio Corto para la Cuenta',
      'ldapOptReferrals' => 'Referencias Opt',
      'ldapUserNameAttribute' => 'Atributo de nombre de usuario',
      'ldapUserObjectClass' => 'Usuario ObjectClass',
      'ldapUserTitleAttribute' => 'Atributo del usuario Título',
      'ldapUserFirstNameAttribute' => 'Nombre de usuario Atributo',
      'ldapUserLastNameAttribute' => 'Apellido de usuario Atributo',
      'ldapUserEmailAddressAttribute' => 'Dirección de correo del usuario atributo',
      'ldapUserTeams' => 'Los equipos de los usuarios',
      'ldapUserDefaultTeam' => 'Equipo de usuario por defecto',
      'ldapUserPhoneNumberAttribute' => 'Número de teléfono del usuario Atributo',
      'ldapPortalUserPortals' => 'Portales predeterminados para un usuario del portal',
      'ldapPortalUserRoles' => 'Roles predeterminados para un usuario del portal',
      'exportDisabled' => 'Desactivar exportar (Solo estará permitido para el administrador)',
      'assignmentNotificationsEntityList' => 'Estas entidades notificarán al usuario cuando le sean asignadas',
      'assignmentEmailNotifications' => 'Se enviará un correo cuando reciba una asignación',
      'assignmentEmailNotificationsEntityList' => 'Entidades a notificar',
      'streamEmailNotifications' => 'Se enviará un correo sobre las actualizaciones en la historia para los usuarios internos',
      'portalStreamEmailNotifications' => 'Se enviará un correo sobre actualizaciones en la historia a los usuarios del portal',
      'streamEmailNotificationsEntityList' => 'Se notificará por correo en las siguientes entidades',
      'streamEmailNotificationsTypeList' => 'Qué se va a notificar',
      'streamEmailWithContentEntityTypeList' => 'Entidades con cuerpo de correo en notas de la historia',
      'emailNotificationsDelay' => 'Retraso de las notificaciones por correo (en segundos)',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Deshabilitar avatares',
      'followCreatedEntities' => 'Seguir los registros creados',
      'displayListViewRecordCount' => 'Mostrar totales (en la vista de lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Deshabilitar temas de usuarios',
      'attachmentUploadMaxSize' => 'Tamaño máximo de carga (Mb)',
      'attachmentUploadChunkSize' => 'Tamaño del fragmento de carga (MB)',
      'emailMessageMaxSize' => 'Tamaño máximo de los correos entrantes (Mb)',
      'massEmailMaxPerHourCount' => 'Cantidad máxima de correos enviados por hora',
      'massEmailMaxPerBatchCount' => 'Número máximo de correos enviados por lote',
      'personalEmailMaxPortionSize' => 'Cantidad máxima de correos personales que se recuperarán cada vez',
      'inboundEmailMaxPortionSize' => 'Cantidad máxima de correos grupales que se recuperarán cada vez',
      'maxEmailAccountCount' => 'Cantidad máxima de cuentas personales que se pueden crear por usuario',
      'emailScheduledBatchCount' => 'Número máximo de correos programados enviados por lote',
      'authTokenLifetime' => 'Vida del token de autenticación (horas)',
      'authTokenMaxIdleTime' => 'Máximo tiempo de inactividad del token de autenticación (horas)',
      'dashboardLayout' => 'Diseño del escritorio (por defecto)',
      'siteUrl' => 'URL del sitio',
      'addressPreview' => 'Vista previa de la dirección',
      'addressFormat' => 'Formato de la Dirección',
      'personNameFormat' => 'Formato de nombre de persona',
      'notificationSoundsDisabled' => 'Desactivar los sonidos de notificación',
      'newNotificationCountInTitle' => 'Mostrar nuevo número de notificación en el título de la página',
      'applicationName' => 'Nombre de la aplicación',
      'calendarEntityList' => 'Lista de entidades de calendario',
      'busyRangesEntityList' => 'Lista de entidades libres / ocupadas',
      'mentionEmailNotifications' => 'Se enviará un correo cuando sean mencionados en los mensajes',
      'massEmailDisableMandatoryOptOutLink' => 'Deshabilitar la obligatoridad del enlace "darse de baja"',
      'massEmailOpenTracking' => 'Seguimiento de apertura de correo',
      'massEmailVerp' => 'Utilice VERP',
      'activitiesEntityList' => 'Lista de entidades de actividades',
      'historyEntityList' => 'Lista de entidades de historia',
      'currencyFormat' => 'Formato de Moneda',
      'currencyDecimalPlaces' => 'Lugares decimales en la moneda',
      'aclAllowDeleteCreated' => 'Permitir eliminar registros creados',
      'adminNotifications' => 'Notificaciones del sistema en el panel de administración',
      'adminNotificationsNewVersion' => 'Mostrar notificación cuando la nueva versión de EspoCRM esté disponible',
      'adminNotificationsNewExtensionVersion' => 'Mostrar notificación cuando haya nuevas versiones de extensiones disponibles',
      'textFilterUseContainsForVarchar' => 'Utilice el operador \'contiene\' cuando filtre campos varchar',
      'phoneNumberNumericSearch' => 'Búsqueda numérica de números de teléfono',
      'phoneNumberInternational' => 'Números de teléfono internacionales',
      'phoneNumberExtensions' => 'Extensiones de números de teléfono',
      'phoneNumberPreferredCountryList' => 'Preferir códigos telefónicos de países',
      'authTokenPreventConcurrent' => 'Solo un token de autenticación por usuario',
      'scopeColorsDisabled' => 'Deshabilitar color de los ámbitos',
      'tabColorsDisabled' => 'Deshabilitar colores de pestañas',
      'tabIconsDisabled' => 'Deshabilitar íconos de pestañas',
      'emailAddressIsOptedOutByDefault' => 'Marcar nuevas direcciones de correo como excluidas',
      'outboundEmailBccAddress' => 'Dirección BCC para clientes externos',
      'cleanupDeletedRecords' => 'Limpiar registros eliminados',
      'addressCityList' => 'Lista de autocompletar de ciudades',
      'addressStateList' => 'Lista de autocompletar de estados',
      'fiscalYearShift' => 'Inicio del año fiscal',
      'jobRunInParallel' => 'Trabajos ejecutados en paralelo',
      'jobMaxPortion' => 'Máximo de trabajos ejecutándose',
      'jobPoolConcurrencyNumber' => 'Número de concurrencia del grupo de trabajos',
      'jobForceUtc' => 'Forzar zona horaria UTC',
      'daemonInterval' => 'Intervalo del demonio',
      'daemonMaxProcessNumber' => 'Máximo número de demonios ejecutándose',
      'daemonProcessTimeout' => 'Demonio Timeout',
      'cronDisabled' => 'Deshabilitar Tareas programadas',
      'maintenanceMode' => 'Modo de mantenimiento',
      'useWebSocket' => 'Usar WebSocket',
      'passwordRecoveryDisabled' => 'Deshabilitar recuperación de contraseña',
      'passwordRecoveryForAdminDisabled' => 'Deshabilitar la recuperación de contraseña para usuarios administradores',
      'passwordRecoveryForInternalUsersDisabled' => 'Deshabilitar la recuperación de contraseña para usuarios internos',
      'passwordRecoveryNoExposure' => 'Evite la exposición de la dirección de correo en el formulario de recuperación de contraseña',
      'passwordGenerateLength' => 'Longitud de las contraseñas generadas',
      'passwordStrengthLength' => 'Longitud mínima de contraseña',
      'passwordStrengthLetterCount' => 'Número de letras requeridas en la contraseña',
      'passwordStrengthNumberCount' => 'Número de dígitos requeridos en la contraseña',
      'passwordStrengthBothCases' => 'La contraseña debe contener letras mayúsculas y minúsculas',
      'passwordStrengthSpecialCharacterCount' => 'Número de caracteres especiales requeridos en la contraseña',
      'auth2FA' => 'Habilitar autenticación de 2 factores',
      'auth2FAForced' => 'Obligar a los usuarios habituales a configurar 2FA',
      'auth2FAMethodList' => 'Métodos 2FA disponibles',
      'auth2FAInPortal' => 'Permitir 2FA en portales',
      'workingTimeCalendar' => 'Calendario de jornada laboral',
      'oidcClientId' => 'ID de cliente de OIDC',
      'oidcClientSecret' => 'Secreto del cliente de OIDC',
      'oidcAuthorizationRedirectUri' => 'URI de redirección de autorización de OIDC',
      'oidcAuthorizationEndpoint' => 'Punto final de autorización de OIDC',
      'oidcTokenEndpoint' => 'Punto final del token OIDC',
      'oidcUserInfoEndpoint' => 'Punto final de información de usuario de OIDC',
      'oidcJwksEndpoint' => 'Punto final del conjunto de claves web JSON de OIDC',
      'oidcJwtSignatureAlgorithmList' => 'Algoritmos de firma permitidos por JWT de OIDC',
      'oidcScopes' => 'Ámbitos del OIDC',
      'oidcGroupClaim' => 'Reclamación del Grupo OIDC',
      'oidcCreateUser' => 'OIDC Crear usuario',
      'oidcUsernameClaim' => 'Reclamación de nombre de usuario de OIDC',
      'oidcTeams' => 'Equipos de OIDC',
      'oidcSync' => 'Sincronización OIDC',
      'oidcSyncTeams' => 'Equipos de sincronización de OIDC',
      'oidcFallback' => 'Inicio de sesión de respaldo de OIDC',
      'oidcAllowRegularUserFallback' => 'OIDC Permitir inicio de sesión alternativo para usuarios habituales',
      'oidcAllowAdminUser' => 'OIDC Permitir el inicio de sesión de OIDC para usuarios administradores',
      'oidcLogoutUrl' => 'URL de cierre de sesión de OIDC',
      'oidcAuthorizationPrompt' => 'Solicitud de autorización de OIDC',
      'pdfEngine' => 'Motor de PDF',
      'quickSearchFullTextAppendWildcard' => 'Añadir comodín en la búsqueda rápida',
      'authIpAddressCheck' => 'Restringir el acceso por dirección IP',
      'authIpAddressWhitelist' => 'Lista blanca de direcciones IP',
      'authIpAddressCheckExcludedUsers' => 'Usuarios excluidos de la comprobación',
      'availableReactions' => 'Reacciones disponibles'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'Primero último',
        'lastFirst' => 'Último primero',
        'firstMiddleLast' => 'Primero Segundo Nombre Apellido',
        'lastFirstMiddle' => 'Último primero medio'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Entradas',
        'Status' => 'Estados de actualizaciones',
        'EmailReceived' => 'Emails recibidos'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP
',
        'Email' => 'Correo',
        'Sms' => 'SMS'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Usuarios que podrán iniciar sesión independientemente de si su dirección IP está en la lista blanca.',
      'authIpAddressWhitelist' => 'Una lista de direcciones IP o rangos en notación CIDR.

Los portales no se ven afectados por la restricción.',
      'workingTimeCalendar' => 'Un calendario de tiempo de trabajo que se aplicará a todos los usuarios de forma predeterminada.',
      'displayListViewRecordCount' => 'Se mostrará un número total de registros en la vista de lista.',
      'currencyList' => 'Qué divisas estarán disponibles en el sistema.',
      'activitiesEntityList' => 'Qué registros estarán disponibles en el panel Actividades.',
      'historyEntityList' => 'Qué registros estarán disponibles en el panel Historial.',
      'calendarEntityList' => 'Qué registros estarán disponibles en el Calendario.',
      'addressStateList' => 'Indique sugerencias para los campos de dirección.',
      'addressCityList' => 'Sugerencias de ciudades para campos de direcciones.',
      'addressCountryList' => 'Sugerencias de países para campos de direcciones.',
      'exportDisabled' => 'Los usuarios no podrán exportar registros. Solo se permitirá el administrador.',
      'globalSearchEntityList' => 'Qué registros se pueden buscar con la búsqueda global.',
      'siteUrl' => 'Una URL de esta instancia de EspoCRM. Necesita cambiarlo si se muda a otro dominio.',
      'useCache' => 'No se recomienda deshabilitar, a menos que sea con fines de desarrollo.',
      'useWebSocket' => 'WebSocket permite la comunicación interactiva bidireccional entre un servidor y un navegador. Requiere configurar el demonio WebSocket en su servidor. Consulte la documentación para obtener más información.',
      'passwordRecoveryForInternalUsersDisabled' => 'Solo los usuarios del portal podrán recuperar la contraseña.',
      'passwordRecoveryNoExposure' => 'No será posible determinar si una dirección de correo específica está registrada en el sistema.',
      'emailAddressLookupEntityTypeList' => 'Para autocompletar la dirección de correo.',
      'emailAddressSelectEntityTypeList' => 'Tipos de entidades disponibles al buscar una dirección de correo desde un modal.',
      'emailNotificationsDelay' => 'Un mensaje se puede editar dentro del período de tiempo especificado antes de que se envíe la notificación.',
      'outboundEmailFromAddress' => 'Los correos del sistema se enviarán desde esta dirección. Se debe configurar correctamente una [cuenta de correo grupal](#InboundEmail) con la misma dirección para enviar correos.',
      'busyRangesEntityList' => 'Qué se tendrá en cuenta al mostrar rangos de tiempo ocupado en el programador y la línea de tiempo.',
      'massEmailVerp' => 'Ruta de retorno de sobre variable. Para un mejor manejo de los mensajes rebotados. Asegúrese de que su proveedor de SMTP lo admita.',
      'recordsPerPage' => 'Número de registros a mostrar inicialmente en las vistas.',
      'recordsPerPageSmall' => 'Número de registros a mostrar inicialmente en los paneles relacionados',
      'recordsPerPageSelect' => 'Número de registros que se muestran inicialmente al seleccionar registros.',
      'recordsPerPageKanban' => 'Número de registros mostrados inicialmente en las columnas kanban.',
      'outboundEmailIsShared' => 'Permitir a los usuarios enviar correos desde esta dirección.',
      'followCreatedEntities' => 'Los usuarios seguirán automáticamente los registros que ellos crearon.',
      'emailMessageMaxSize' => 'Todos los correos entrantes que superen un tamaño especificado se omitirán.',
      'authTokenLifetime' => 'Define cuanto tiempo de vida tienen los tokens.
0 - significa que no caduca.',
      'authTokenMaxIdleTime' => 'Define cuándo caduca el Token luego del último acceso.
0 - significa que no caduca.',
      'userThemesDisabled' => 'Si está marcado, los usuarios no podrán seleccionar otro tema.',
      'ldapUsername' => 'El sistema de usuario DN completo que permite a los usuarios buscar otros. E.g. "CN=LDAP usuario del sistema,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'La contraseña para acceder al servidor LDAP.',
      'ldapAuth' => 'Credenciales de acceso para el servidor LDAP.',
      'ldapUserNameAttribute' => 'El atributo para identificar al usuario.
Por ejemplo: "userPrincipalName" o "sAMAccountName" para Active Directory, "uid" para OpenLDAP.',
      'ldapUserObjectClass' => 'Atributo ObjectClass para buscar usuarios. Por ejemplo: "person" para AD, "inetOrgPerson" para OpenLDAP.',
      'ldapAccountCanonicalForm' => 'El tipo de forma canónica de su cuenta. Hay 4 opciones:

- \'Dn\' - el formulario en el formato CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\': el formulario \'tester\'.

- \'Backslash\': el formulario \'COMPANY\\tester\'.

- \'Principal\': el formulario \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'La opción para formatear el nombre de usuario en el formulario de DN.',
      'ldapBaseDn' => 'La base DN predeterminado utilizado para la búsqueda de los usuarios. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapOptReferrals' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapPortalUserLdapAuth' => 'Permita que los usuarios del portal utilicen la autenticación LDAP en lugar de la autenticación Espo.',
      'ldapCreateEspoUser' => 'Esta opción permite EspoCRM para crear un usuario del LDAP.',
      'ldapUserFirstNameAttribute' => 'atributo LDAP que se utiliza para determinar el nombre de usuario primero. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Equipos de usuario creado. Para más información, véase el perfil de usuario.',
      'ldapUserDefaultTeam' => 'equipo predeterminado de usuario creado. Para más información, véase el perfil de usuario.',
      'ldapPortalUserPortals' => 'Portales predeterminados para el usuario del portal creados',
      'ldapPortalUserRoles' => 'Roles predeterminados para el usuario del portal creados',
      'b2cMode' => 'Por defecto EspoCRM esta adaptado para B2B. Usted puede cambiarlo a B2C.',
      'currencyDecimalPlaces' => 'Número de decimales. Si está vacía, se mostrarán todas las posiciones decimales disponibles.',
      'aclStrictMode' => 'Activado: el acceso a los ámbitos estará prohibido si no está especificado en roles.

Deshabilitado: se permitirá el acceso a ámbitos si no está especificado en roles.',
      'aclAllowDeleteCreated' => 'Los usuarios podrán eliminar sus propios registros, incluso si no tienen un acceso de eliminación.',
      'textFilterUseContainsForVarchar' => 'Si no está marcado, se utiliza el operador \'comienza con\'. Puede usar el comodín \'%\'.',
      'streamEmailNotificationsEntityList' => 'Notificaciones por correo sobre actualizaciones de flujo de registros seguidos. Los usuarios recibirán notificaciones por correo solo para los tipos de entidad especificados.',
      'authTokenPreventConcurrent' => 'Los usuarios no podrán iniciar sesión en varios dispositivos simultáneamente.',
      'emailAddressIsOptedOutByDefault' => 'Al crear un nuevo registro, la dirección de correo se marcará como excluida.',
      'cleanupDeletedRecords' => 'Los registros eliminados se eliminarán de la base de datos después de un tiempo.',
      'jobRunInParallel' => 'Los trabajos se ejecutarán en procesos paralelos.',
      'jobPoolConcurrencyNumber' => 'Número máximo de procesos ejecutados simultáneamente.',
      'jobMaxPortion' => 'Número máximo de trabajos procesados por una ejecución.',
      'jobForceUtc' => 'Utilice la zona horaria UTC para los trabajos programados. De lo contrario, se utilizará la zona horaria establecida en la configuración.',
      'daemonInterval' => 'Intervalo entra la ejecución de cada Tarea Programada. En segundos.',
      'daemonMaxProcessNumber' => 'Número máximo de Tareas programada ejecutados simultáneamente.',
      'daemonProcessTimeout' => 'Tiempo máximo de ejecución (en segundos) asignado para un solo proceso cron.',
      'cronDisabled' => 'Las tareas Programadas no se ejecutarán',
      'maintenanceMode' => 'Solo los administradores tendrán acceso al sistema.',
      'oidcGroupClaim' => 'Un reclamo para utilizar en el mapeo de equipos.',
      'oidcFallback' => 'Permitir inicio de sesión con nombre de usuario y contraseña.',
      'oidcCreateUser' => 'Cree un nuevo usuario en Espo cuando no encuentre ningún usuario coincidente.',
      'oidcSync' => 'Sincronizar datos de usuario (en cada inicio de sesión).',
      'oidcSyncTeams' => 'Sincronizar equipos de usuarios (en cada inicio de sesión).',
      'oidcUsernameClaim' => 'Un reclamo para usar un nombre de usuario (para la creación y coincidencia de usuarios).',
      'oidcTeams' => 'Equipos de Espo asignados a grupos, equipos y roles del proveedor de identidad. Los equipos con un valor de asignación vacío siempre se asignarán a un usuario (al crear o sincronizar).',
      'oidcLogoutUrl' => 'Una URL a la que el navegador redirigirá tras cerrar sesión en Espo. Su objetivo es borrar la información de la sesión en el navegador y cerrar sesión en el proveedor. Normalmente, la URL contiene un parámetro redirect-URL para volver a Espo.

Marcadores de posición disponibles:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Añade un comodín a una consulta de búsqueda de autocompletado cuando la búsqueda de texto completo está habilitada. Reduce el rendimiento de la búsqueda.'
    ],
    'labels' => [
      'Group Tab' => 'Ficha Grupo',
      'Divider' => 'Divisor',
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'Search' => 'Buscar',
      'Misc' => 'Misceláneos',
      'SMTP' => 'SMTP',
      'General' => 'General',
      'Phone Numbers' => 'Números de teléfono',
      'Navbar' => 'Barra de navegación',
      'Dashboard' => 'Panel',
      'Configuration' => 'Configuración',
      'In-app Notifications' => 'Notificaciones del sistema',
      'Email Notifications' => 'Notificaciones de correo',
      'Currency Settings' => 'Ajustes de moneda',
      'Currency Rates' => 'Tasas de conversión de divisas',
      'Mass Email' => 'Correo masivo',
      'Scheduled Send' => 'Envío programado',
      'Test Connection' => 'Probar conexión',
      'Connecting' => 'Conectando...',
      'Activities' => 'Actividades planeadas',
      'Admin Notifications' => 'Notificaciones de administrador',
      'Passwords' => 'Contraseñas',
      '2-Factor Authentication' => 'Autenticación de 2 factores',
      'Attachments' => 'Adjuntos',
      'IdP Group' => 'Grupo IdP',
      'Access' => 'Acceso',
      'Strength' => 'Fortaleza',
      'Recovery' => 'Recuperación'
    ],
    'messages' => [
      'ldapTestConnection' => 'La conexión fue establecida con éxito.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Escriba **@nombredeusuario** para mencionar al usuario en la publicación.',
      'infoSyntax' => 'Sintaxis de markdown disponible',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'No se pudo agregar al usuario \'{userName}\' a la lista de seguidores. El usuario no tiene acceso de transmisión al registro.'
    ],
    'syntaxItems' => [
      'code' => 'código',
      'multilineCode' => 'código multilínea',
      'strongText' => 'texto en negrita',
      'emphasizedText' => 'texto enfatizado',
      'deletedText' => 'texto eliminado',
      'blockquote' => 'bloque de cita',
      'link' => 'texto del enlace'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Nombre',
      'roles' => 'Roles',
      'layoutSet' => 'Conjunto de diseño',
      'workingTimeCalendar' => 'Calendario de jornada laboral',
      'positionList' => 'Lista de puestos',
      'userRole' => 'Rol de usuario'
    ],
    'links' => [
      'users' => 'Usuarios',
      'notes' => 'Notas',
      'roles' => 'Roles',
      'layoutSet' => 'Conjunto de diseño',
      'workingTimeCalendar' => 'Calendario de jornada laboral',
      'inboundEmails' => 'Cuentas de correo grupales',
      'groupEmailFolders' => 'Carpetas de correo grupales'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'Se aplicará un calendario a los usuarios que tengan este equipo configurado como Equipo predeterminado.',
      'layoutSet' => 'Proporciona la capacidad de tener diseños que difieran de los estándar. El Conjunto de diseño se aplicará a los usuarios que tengan este equipo configurado como Equipo predeterminado.',
      'roles' => 'Todos los usuarios de este equipo tendrán acceso a la configuración desde los roles seleccionados',
      'positionList' => 'Puestos disponibles en este equipo. Por ejemplo Vendedor, Gerente.'
    ],
    'labels' => [
      'Create Team' => 'Crear equipo'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Nombre',
      'body' => 'Cuerpo',
      'entityType' => 'Tipo de entidad',
      'header' => 'Cabecera',
      'footer' => 'Pié',
      'leftMargin' => 'Margen Izquierdo',
      'topMargin' => 'Margen Superior',
      'rightMargin' => 'Margen Derecho',
      'bottomMargin' => 'Margen Inferior',
      'printFooter' => 'Imprimir Pié',
      'printHeader' => 'Encabezado de impresión',
      'footerPosition' => 'Posición del Pié',
      'headerPosition' => 'Posición del encabezado',
      'variables' => 'Etiquetas disponibles.',
      'pageOrientation' => 'Oriteción de página',
      'pageFormat' => 'Formato de papel',
      'pageWidth' => 'Ancho de página (mm)',
      'pageHeight' => 'Altura de página (mm)',
      'fontFace' => 'Fuente',
      'title' => 'Título',
      'style' => 'Estilo'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Crear plantilla'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Vertical',
        'Landscape' => 'Horizontal'
      ],
      'pageFormat' => [
        'Custom' => 'Personalizada'
      ],
      'placeholders' => [
        'pagebreak' => 'Salto de página',
        'today' => 'Hoy (fecha)',
        'now' => 'Ahora (fecha/hora)'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'footer' => 'Use {pageNumber} para imprimir el número de página.',
      'variables' => 'Copie y Pegue la etiqueta necesaria en el encabezado, cuerpo o pie de página.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Nombre',
      'userName' => 'Nombre de Usuario',
      'title' => 'Título',
      'type' => 'Tipo',
      'isAdmin' => 'Es administrador',
      'defaultTeam' => 'Equipo por defecto',
      'emailAddress' => 'Correo',
      'phoneNumber' => 'Teléfono',
      'roles' => 'Roles',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'teamRole' => 'Puesto',
      'password' => 'Contraseña',
      'currentPassword' => 'Contraseña Actual',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'Nueva Contraseña',
      'newPasswordConfirm' => 'Confirmar Contraseña Nueva',
      'yourPassword' => 'Tu contraseña actual',
      'avatar' => 'Avatar',
      'avatarColor' => 'Color del avatar',
      'isActive' => 'Está activo',
      'isPortalUser' => 'Es usuario del portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'sendAccessInfo' => 'Enviar información de acceso al usuario',
      'portal' => 'Portal',
      'gender' => 'Sexo',
      'position' => 'Puesto en el equipo',
      'ipAddress' => 'Dirección IP',
      'passwordPreview' => 'Vista previa de la contraseña',
      'isSuperAdmin' => 'Es superadministrador',
      'lastAccess' => 'Último acceso',
      'apiKey' => 'Clave de API',
      'secretKey' => 'Clave de secreto',
      'dashboardTemplate' => 'Plantilla de escritorio',
      'workingTimeCalendar' => 'Calendario de jornada laboral',
      'auth2FA' => '2FA',
      'authMethod' => 'Método de autenticación',
      'auth2FAEnable' => 'Habilitar autenticación de 2 factores',
      'auth2FAMethod' => 'Método 2FA',
      'auth2FATotpSecret' => '2FA TOTP Secreto',
      'layoutSet' => 'Conjunto de diseño',
      'acceptanceStatus' => 'Estado de Aceptación',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)'
    ],
    'links' => [
      'defaultTeam' => 'Equipo predeterminado',
      'teams' => 'Equipos',
      'roles' => 'Roles',
      'notes' => 'Notas',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'tasks' => 'Tareas',
      'userData' => 'Datos del usuario',
      'dashboardTemplate' => 'Plantilla de escritorio',
      'workingTimeCalendar' => 'Calendario de jornada laboral',
      'workingTimeRanges' => 'Excepciones al tiempo de trabajo',
      'layoutSet' => 'Conjunto de diseño',
      'targetLists' => 'Lista de objetivos'
    ],
    'labels' => [
      'Create User' => 'Crear usuario',
      'Generate' => 'Generar',
      'Access' => 'Acceso',
      'Preferences' => 'Preferencias',
      'Change Password' => 'Cambiar Contraseña',
      'Teams and Access Control' => 'Equipos y control de acceso',
      'Forgot Password?' => '¿Olvidó la Contraseña?',
      'Password Change Request' => 'Solicitar Cambio de Contraseña',
      'Email Address' => 'Dirección de correo',
      'External Accounts' => 'Cuentas externas',
      'Email Accounts' => 'Cuentas de correo',
      'Portal' => 'Portal',
      'Create Portal User' => 'Crear usuario del portal',
      'Proceed w/o Contact' => 'Continuar sin contacto',
      'Generate New API Key' => 'Generar una nueva clave de API',
      'Generate New Password' => 'Generar nueva contraseña',
      'Send Password Change Link' => 'Enviar enlace de cambio de contraseña',
      'Back to login form' => 'Volver al formulario de inicio de sesión',
      'Requirements' => 'Requisitos',
      'Security' => 'Seguridad',
      'Reset 2FA' => 'Reiniciar 2FA',
      'Code' => 'Código',
      'Secret' => 'Secreto',
      'Send Code' => 'Enviar código',
      'Login Link' => 'Enlace de inicio de sesión'
    ],
    'tooltips' => [
      'defaultTeam' => 'Todos los registros creados por este usuario serán relacionados a este equipo por defecto.',
      'userName' => 'Letras a-z, números 0-9 y guiones bajos están permitidos',
      'isAdmin' => 'El usuario administrador puede tener acceso a todo.',
      'isActive' => 'Si lo desmarca, el usuario no podrá iniciar sesión.',
      'teams' => 'Equipos a los que este usuario pertenece. Nivel de control de acceso se hereda de los roles de equipo.',
      'roles' => 'Roles de acceso adicionales. Úsalo si el usuario no pertenece a ningún equipo o si necesita ampliar el nivel de control de acceso solo para este usuario.',
      'portalRoles' => 'Roles adicionales del portal. Utilícelos para extender el nivel de acceso exclusivamente para este usuario.',
      'portals' => 'El usuario tiene accesos a los siguientes portales.',
      'layoutSet' => 'Se aplicarán al usuario los diseños de un conjunto específico en lugar de los predeterminados.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'El método 2FA no está completamente configurado en el sistema.',
      'loginAs' => 'Abra el enlace de inicio de sesión en una ventana de incógnito para conservar su sesión actual. Use sus credenciales de administrador para iniciar sesión.',
      'sendPasswordChangeLinkConfirmation' => 'Se enviará un correo con un enlace único al usuario para que pueda cambiar su contraseña. El enlace caducará después de un tiempo determinado.',
      'passwordRecoverySentIfMatched' => 'Suponiendo que los datos ingresados coincidieran con cualquier cuenta de usuario.',
      'passwordStrengthLength' => 'Debe tener al menos {length} caracteres de longitud.',
      'passwordStrengthLetterCount' => 'Debe contener al menos {count} letras.',
      'passwordStrengthNumberCount' => 'Debe contener al menos {count} dígito(s).',
      'passwordStrengthSpecialCharacterCount' => 'Debe contener al menos {count} caracteres especiales.',
      'passwordStrengthBothCases' => 'Debe contener letras en mayúscula y minúscula.',
      'passwordWillBeSent' => 'La Contraseña será enviada al correo del usuario.',
      'passwordChanged' => 'La Contraseña ha sido cambiada',
      'userCantBeEmpty' => 'El nombre de usuario no puede estar vacío',
      'wrongUsernamePassword' => 'Nombre de usuario/contraseña incorrectos',
      'failedToLogIn' => 'No se pudo iniciar sesión',
      'emailAddressCantBeEmpty' => 'La dirección de correo no puede estar vacía',
      'userNameEmailAddressNotFound' => 'Nombre de Usuario/Correo no encontrado',
      'forbidden' => 'Prohibido, por favor intente después',
      'uniqueLinkHasBeenSent' => 'El enlace único ha sido enviado a la dirección de correo especificada.',
      'passwordChangedByRequest' => 'La contraseña ha sido cambiada.',
      'setupSmtpBefore' => 'Debe configurar [Configuración SMTP]({url}) para que el sistema pueda enviar la contraseña por correo.',
      'userNameExists' => 'Nombre de usuario ya existe',
      'loginError' => 'Se produjo un error',
      'wrongCode' => 'Código incorrecto',
      'codeIsRequired' => 'El código es obligatorio',
      'yourAuthenticationCode' => 'Su código de autenticación: {code}.',
      'choose2FaSmsPhoneNumber' => 'Seleccione un número de teléfono que se utilizará para 2FA.',
      'choose2FaEmailAddress' => 'Seleccione una dirección de correo para la autenticación de dos factores (2FA). Se recomienda usar una dirección de correo que no sea la principal.',
      'enterCodeSentInEmail' => 'Introduzca el código enviado a su dirección de correo.',
      'enterCodeSentBySms' => 'Introduzca el código enviado por SMS a su número de teléfono.',
      'enterTotpCode' => 'Ingrese un código de su aplicación de autenticación.',
      'verifyTotpCode' => 'Escanee el código QR con su aplicación de autenticación móvil. Si tiene problemas para escanear, puede ingresar el secreto manualmente. Después de eso, verá un código de 6 dígitos en su aplicación. Ingresar este código en el campo de abajo.',
      'generateAndSendNewPassword' => 'Se generará una nueva contraseña y se enviará a la dirección de correo del usuario.',
      'security2FaResetConfirmation' => '¿Está seguro de que desea restablecer la configuración actual de 2FA?',
      'auth2FARequiredHeader' => 'Se requiere autenticación de 2 factores',
      'auth2FARequired' => 'Debe configurar la autenticación de 2 factores. Utilice una aplicación de autenticación en su teléfono móvil (por ejemplo, Google Authenticator).',
      'ldapUserInEspoNotFound' => 'El usuario no se encuentra en EspoCRM. Póngase en contacto con su administrador para crear el usuario.',
      'passwordChangeRequestNotFound' => 'No se encuentra la solicitud de cambio de contraseña. Podría estar caducada. Intente recuperarla desde la [página de inicio de sesión]({url}).',
      'defaultTeamIsNotUsers' => 'El equipo predeterminado debe ser uno de los equipos del usuario'
    ],
    'options' => [
      'gender' => [
        '' => 'No definido',
        'Male' => 'Masculino',
        'Female' => 'Femenino',
        'Neutral' => 'Neutral'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Administrador',
        'portal' => 'Portal',
        'system' => 'SIstema',
        'super-admin' => 'Superadministrador',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'Clave de API',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Solo de mi equipo',
      'onlyMe' => 'Sólo yo'
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'activePortal' => 'Portales activos',
      'activeApi' => 'API Activa'
    ],
    'actions' => [
      'changePosition' => 'Cambiar de posición'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Crear Webhook'
    ],
    'fields' => [
      'event' => 'Evento',
      'url' => 'URL',
      'isActive' => 'Está activo',
      'user' => 'Usuario de API',
      'entityType' => 'Tipo de entidad',
      'field' => 'Campo',
      'secretKey' => 'Clave de secreto'
    ],
    'links' => [
      'user' => 'Usuario',
      'queueItems' => 'Queue Items'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'target' => 'Target',
      'data' => 'Data',
      'isProcessed' => 'Is Processed'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Evento',
      'webhook' => 'Webhook',
      'target' => 'Objetivo',
      'data' => 'Datos',
      'status' => 'Estado',
      'processedAt' => 'Procesado en',
      'attempts' => 'Intentos',
      'processAt' => 'Proceso en'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Success' => 'Éxito',
        'Failed' => 'Fallido'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Crear calendario'
    ],
    'fields' => [
      'timeZone' => 'Zona horaria',
      'timeRanges' => 'Horario de jornada laboral',
      'weekday0' => 'Dom',
      'weekday1' => 'Lun',
      'weekday2' => 'Mar',
      'weekday3' => 'Mié',
      'weekday4' => 'Jue',
      'weekday5' => 'Vie',
      'weekday6' => 'Sáb',
      'weekday0TimeRanges' => 'Horario del domingo',
      'weekday1TimeRanges' => 'Horario del lunes',
      'weekday2TimeRanges' => 'Horario del martes',
      'weekday3TimeRanges' => 'Horario del miércoles',
      'weekday4TimeRanges' => 'Horario del jueves',
      'weekday5TimeRanges' => 'Horario del viernes',
      'weekday6TimeRanges' => 'Horario del sábado'
    ],
    'links' => [
      'ranges' => 'Excepciones'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Crear excepción',
      'Calendars' => 'Calendarios'
    ],
    'fields' => [
      'timeRanges' => 'Cronograma',
      'dateStart' => 'Fecha de inicio',
      'dateEnd' => 'Fecha de finalización',
      'type' => 'Tipo',
      'calendars' => 'Calendarios',
      'users' => 'Usuarios'
    ],
    'links' => [
      'calendars' => 'Calendarios',
      'users' => 'Usuarios'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'No laborable',
        'Working' => 'Laborable'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendarios a los que se aplicará la excepción. La excepción se aplicará a todos los usuarios de los calendarios seleccionados.

Deje este campo en blanco si necesita aplicar la excepción solo a usuarios específicos.',
      'users' => 'Usuarios específicos a los que se aplicará la excepción.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo',
      'website' => 'Sitio web',
      'phoneNumber' => 'Teléfono',
      'billingAddress' => 'Dirección de facturación',
      'shippingAddress' => 'Dirección de envío',
      'description' => 'Descripción',
      'sicCode' => 'Código SIC',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Título',
      'contactIsInactive' => 'Inactivo',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de objetivos',
      'targetList' => 'Lista de objetivos',
      'originalLead' => 'Posible cliente de origen',
      'cIDCliente' => 'IDCliente',
      'cEstado' => 'Estado',
      'cEtapa' => 'Etapa'
    ],
    'links' => [
      'contacts' => 'Contactos',
      'contactsPrimary' => 'Contactos (primario)',
      'opportunities' => 'Oportunidades',
      'cases' => 'Tickets',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniones (ampliado)',
      'callsPrimary' => 'Llamadas (ampliado)',
      'tasksPrimary' => 'Tareas (ampliado)',
      'emailsPrimary' => 'Correos (ampliado)',
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'portalUsers' => 'Usuarios del portal',
      'originalLead' => 'Posible cliente de origen'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Socio',
        'Reseller' => 'Revendedor'
      ],
      'industry' => [
        'Aerospace' => 'Aeroespacial',
        'Agriculture' => 'Agrícola',
        'Advertising' => 'Publicidad',
        'Apparel & Accessories' => 'Ropa y accesorios',
        'Architecture' => 'Arquitectura',
        'Automotive' => 'Automotriz',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnología',
        'Building Materials & Equipment' => 'Materiales de construcción y equipamiento',
        'Chemical' => 'Química',
        'Construction' => 'Construcción',
        'Computer' => 'Computación',
        'Defense' => 'Defensa',
        'Creative' => 'Creativa',
        'Culture' => 'Cultural',
        'Consulting' => 'Consultoría',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Electric Power' => 'Energía eléctrica',
        'Energy' => 'Energía',
        'Entertainment & Leisure' => 'Entretenimiento y ocio',
        'Finance' => 'Finanzas',
        'Food & Beverage' => 'Alimentación y bebidas',
        'Grocery' => 'Comestibles',
        'Hospitality' => 'Hostelería',
        'Healthcare' => 'Cuidado de la salud',
        'Insurance' => 'Seguros',
        'Legal' => 'Jurídica',
        'Manufacturing' => 'Fabricación',
        'Mass Media' => 'Medios masivos',
        'Mining' => 'Minería',
        'Music' => 'Música',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publicaciones',
        'Petroleum' => 'Petróleo',
        'Real Estate' => 'Bienes raices',
        'Retail' => 'Venta al por menor',
        'Shipping' => 'Naviera',
        'Service' => 'Servicio',
        'Support' => 'Soporte',
        'Sports' => 'Deportes',
        'Software' => 'Software',
        'Technology' => 'Tecnología',
        'Telecommunications' => 'Telecomunicaciones',
        'Television' => 'Televisión',
        'Testing, Inspection & Certification' => 'Pruebas, inspección y certificación',
        'Transportation' => 'Transporte',
        'Travel' => 'Viajes',
        'Venture Capital' => 'Capital de riesgo',
        'Wholesale' => 'Venta al por mayor',
        'Water' => 'Agua'
      ],
      'cEstado' => [
        'Nuevo' => 'Nuevo',
        'Negociación' => 'Negociación',
        'Activo' => 'Activo',
        'Cerrado' => 'Cerrado'
      ],
      'cEtapa' => [
        'Prospección' => 'Prospección',
        'Calificación' => 'Calificación',
        'Cotización' => 'Cotización',
        'Negociación' => 'Negociación',
        'Ganado' => 'Ganado',
        'Perdido' => 'Perdido'
      ]
    ],
    'labels' => [
      'Create Account' => 'Crear Negocio',
      'Copy Billing' => 'Copiar desde facturación',
      'Set Primary' => 'Establecer como principal'
    ],
    'presetFilters' => [
      'customers' => 'Clientes',
      'partners' => 'Socios',
      'recentlyCreated' => 'Creado recientemente'
    ],
    'tabs' => [
      'Account' => 'Cuenta',
      'Support' => 'Soporte'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
      'timeline' => 'Línea de tiempo'
    ],
    'labels' => [
      'Today' => 'Hoy',
      'Create' => 'Crear',
      'Shared' => 'Compartido',
      'Add User' => 'Agregar usuario',
      'current' => 'actual',
      'time' => 'hora',
      'User List' => 'Lista de usuarios',
      'View Calendar' => 'Ver calendario',
      'Create Shared View' => 'Crear vista compartida',
      'Edit Shared View' => 'Editar vista compartida',
      'Shared Mode Options' => 'Opciones del modo compartido'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estado de aceptación',
      'uid' => 'UID'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin celebrar'
      ],
      'direction' => [
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante'
      ],
      'acceptanceStatus' => [
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar como celebrada',
      'setNotHeld' => 'Marcar como No celebrada'
    ],
    'labels' => [
      'Create Call' => 'Crear llamada',
      'Set Held' => 'Marcar como celebrada',
      'Set Not Held' => 'Marcar como No celebrada',
      'Send Invitations' => 'Enviar Invitaciones'
    ],
    'presetFilters' => [
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De hoy'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Nombre',
      'description' => 'Descripción',
      'status' => 'Estado',
      'type' => 'Tipo',
      'startDate' => 'Fecha de inicio',
      'endDate' => 'Fecha de finalización',
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'sentCount' => 'Enviado',
      'openedCount' => 'Abierto',
      'clickedCount' => 'Cliqueados',
      'optedOutCount' => 'Se dieron de baja',
      'bouncedCount' => 'Rebotados',
      'optedInCount' => 'Se dieron de alta',
      'hardBouncedCount' => 'Rebotados Duro',
      'softBouncedCount' => 'Rebotado Suave',
      'leadCreatedCount' => 'Posibles clientes creados',
      'revenue' => 'Ingresos',
      'revenueConverted' => 'ingresos (convertido)',
      'budget' => 'Presupuesto',
      'budgetConverted' => 'Presupuesto (convertido)',
      'budgetCurrency' => 'Moneda de presupuesto',
      'contactsTemplate' => 'Plantilla de contactos',
      'leadsTemplate' => 'Plantilla de posible cliente',
      'accountsTemplate' => 'Plantilla de cuentas',
      'usersTemplate' => 'Plantillas de usuarios',
      'mailMergeOnlyWithAddress' => 'Saltar registros sin dirección completa'
    ],
    'links' => [
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Registros',
      'massEmails' => 'Correos masivos',
      'trackingUrls' => 'URLs de seguimiento',
      'contactsTemplate' => 'Plantilla de contactos',
      'leadsTemplate' => 'Plantilla de posible cliente',
      'accountsTemplate' => 'Plantilla de cuentas',
      'usersTemplate' => 'Plantillas de usuarios'
    ],
    'options' => [
      'type' => [
        'Email' => 'Correo',
        'Informational Email' => 'Correo informativo',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Boletín de noticias',
        'Mail' => 'Correo'
      ],
      'status' => [
        'Planning' => 'Planificación',
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
        'Complete' => 'Completada'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Crear campaña',
      'Target Lists' => 'Lista de objetivos',
      'Statistics' => 'Estadísticas',
      'hard' => 'duro',
      'soft' => 'suave',
      'Unsubscribe' => 'Desuscribirse',
      'Mass Emails' => 'Correos masivos',
      'Email Templates' => 'Plantillas de correos',
      'Unsubscribe again' => 'Cancelar otra vez la suscripción',
      'Subscribe again' => 'Suscribirse nuevamente',
      'Create Target List' => 'Crear lista de obejtivos',
      'Mail Merge' => 'Combinar correspondencia',
      'Generate Mail Merge PDF' => 'Generar PDF de combinación de correspondencia'
    ],
    'presetFilters' => [
      'active' => 'Activo'
    ],
    'messages' => [
      'cannotChangeType' => 'No se puede cambiar el tipo.',
      'unsubscribed' => 'Usted ha cancelado la suscripción a nuestra lista de correo.',
      'subscribedAgain' => 'Se ha vuelto a suscribir.'
    ],
    'tooltips' => [
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Acción',
      'actionDate' => 'Fecha',
      'data' => 'Datos',
      'campaign' => 'Campaña',
      'parent' => 'Objetivo',
      'object' => 'Objeto',
      'application' => 'Aplicacion',
      'queueItem' => 'Elemento de la cola',
      'stringData' => 'Cadena de datos',
      'stringAdditionalData' => 'Cadena de datos adicional',
      'isTest' => 'Es una prueba'
    ],
    'links' => [
      'queueItem' => 'Elemento de la cola',
      'parent' => 'Padre',
      'object' => 'Objeto',
      'campaign' => 'Campaña'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Enviado',
        'Opened' => 'Abierto',
        'Opted Out' => 'Se dieron de baja',
        'Bounced' => 'Rebotados',
        'Clicked' => 'Cliqueados',
        'Lead Created' => 'Posible cliente creado',
        'Opted In' => 'Se dieron de alta'
      ]
    ],
    'labels' => [
      'All' => 'Todos'
    ],
    'presetFilters' => [
      'sent' => 'Enviado',
      'opened' => 'Abierto',
      'optedOut' => 'Se dieron de baja',
      'optedIn' => 'Se dieron de alta',
      'bounced' => 'Rebotados',
      'clicked' => 'Cliqueados',
      'leadCreated' => 'Posible cliente creado'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Acción',
      'urlToUse' => 'Código para insertar en lugar de la URL',
      'message' => 'Mensaje',
      'campaign' => 'Campaña'
    ],
    'links' => [
      'campaign' => 'Campaña'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Crear URL de seguimiento'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirigir',
        'Show Message' => 'Mostrar mensaje'
      ]
    ],
    'tooltips' => [
      'url' => 'El destinatario será redirigido a esta ubicación después de seguir el enlace.',
      'message' => 'El mensaje se mostrará al destinatario después de que sigan el enlace. Se admite Markdown.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estado',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'contacts' => 'Contactos',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
      'inboundEmail' => 'Cuenta de correo grupal',
      'lead' => 'Posible cliente',
      'attachments' => 'Adjuntos',
      'originalEmail' => 'Correo original',
      'isInternal' => 'Oculto del portal'
    ],
    'links' => [
      'inboundEmail' => 'Cuenta de correo grupal',
      'account' => 'Cuenta',
      'contact' => 'Contratos (principal)',
      'Contacts' => 'Contactos',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'articles' => 'Artículos de la base de conocimiento',
      'lead' => 'Posible cliente',
      'attachments' => 'Adjuntos'
    ],
    'options' => [
      'status' => [
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrados',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicar'
      ],
      'priority' => [
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ],
      'type' => [
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema'
      ]
    ],
    'labels' => [
      'Create Case' => 'Crear ticket',
      'Close' => 'Cerrar',
      'Reject' => 'Rechazar',
      'Closed' => 'Cerrados',
      'Rejected' => 'Rechazado'
    ],
    'presetFilters' => [
      'open' => 'Abiertos',
      'closed' => 'Cerrados'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo',
      'title' => 'Titulo de cuenta',
      'account' => 'Cuenta',
      'accounts' => 'Cuentas',
      'phoneNumber' => 'Teléfono',
      'accountType' => 'Tipo de Cuenta',
      'doNotCall' => 'No llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Rol de Oportunidad',
      'accountRole' => 'Título',
      'description' => 'Descripción',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de objetivos',
      'targetList' => 'Lista de objetivos',
      'portalUser' => 'Usuario del portal',
      'hasPortalUser' => 'Tiene usuario del portal',
      'originalLead' => 'Posible cliente de origen',
      'acceptanceStatus' => 'Estado de Aceptación',
      'accountIsInactive' => 'Cuenta inactiva',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)',
      'originalEmail' => 'Correo original',
      'cIDContacto' => 'ID Contacto',
      'cFechaDeNacimiento' => 'Fecha de Nacimiento',
      'cEstadoCivil' => 'Estado Civil',
      'cOcuapacin' => 'Ocuapación / Profesión',
      'cEmpresaDondeLabora' => 'Empresa donde Labora',
      'cNoDeIdentidad' => 'No. de Identidad',
      'cRTN' => 'RTN'
    ],
    'links' => [
      'opportunities' => 'Oportunidades',
      'cases' => 'Tickets',
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'account' => 'Cuentas (principal)',
      'accounts' => 'Cuentas',
      'casesPrimary' => 'Tickets (principal)',
      'tasksPrimary' => 'Tareas (ampliadas)',
      'opportunitiesPrimary' => 'Oportunidades (primaria)',
      'portalUser' => 'Usuario del portal',
      'originalLead' => 'Posible cliente de origen',
      'documents' => 'Documentos'
    ],
    'labels' => [
      'Create Contact' => 'Crear contacto'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Tomador de decisiones',
        'Evaluator' => 'Evaluador',
        'Influencer' => 'Factor de influencia'
      ],
      'cEstadoCivil' => [
        'Soltero/a' => 'Soltero/a',
        'Casado/a' => 'Casado/a',
        'Union Libre' => 'Union Libre',
        'Separado/a' => 'Separado/a'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Usuarios del portal',
      'notPortalUsers' => 'No son usuarios del portal',
      'accountActive' => 'Activo'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Crear documento',
      'Details' => 'Detalles'
    ],
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'publishDate' => 'Fecha de publicación',
      'expirationDate' => 'Fecha de caducidad',
      'description' => 'Descripción',
      'accounts' => 'Cuentas',
      'folder' => 'Carpeta'
    ],
    'links' => [
      'accounts' => 'Cuentas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Carpeta',
      'leads' => 'Posibles clientes',
      'contacts' => 'Contactos'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Draft' => 'Borrador',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado'
      ],
      'type' => [
        '' => 'Ninguno',
        'Contract' => 'Contrato',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de licencia'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'draft' => 'Borrador'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Crear carpeta de documentos',
      'Manage Categories' => 'Administrar carpetas',
      'Documents' => 'Documentos'
    ],
    'links' => [
      'documents' => 'Documentos'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'target' => 'Objetivo',
      'sentAt' => 'Fecha de envío',
      'attemptCount' => 'Intentos',
      'emailAddress' => 'Dirección de correo',
      'massEmail' => 'Correo masivo',
      'isTest' => 'Es una prueba'
    ],
    'links' => [
      'target' => 'Objetivo',
      'massEmail' => 'Correo masivo'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Sent' => 'Enviado',
        'Failed' => 'Falló',
        'Sending' => 'Enviando'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Pendiente',
      'sent' => 'Enviado',
      'failed' => 'Falló'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Crear artículo',
      'Any' => 'Cualquiera',
      'Send in Email' => 'Enviar por correo',
      'Move Up' => 'Mover arriba',
      'Move Down' => 'Mover abajo',
      'Move to Top' => 'Mover al inicio',
      'Move to Bottom' => 'Mover al final'
    ],
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'type' => 'Tipo',
      'attachments' => 'Adjuntos',
      'publishDate' => 'Fecha de publicación',
      'expirationDate' => 'Fecha de caducidad',
      'description' => 'Descripción',
      'body' => 'Cuerpo',
      'categories' => 'Categorías',
      'language' => 'Idioma',
      'portals' => 'Portales',
      'bodyPlain' => 'Cuerpo plano'
    ],
    'links' => [
      'cases' => 'Tickets',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorías',
      'portals' => 'Portales'
    ],
    'options' => [
      'status' => [
        'In Review' => 'En revisión',
        'Draft' => 'Borrador',
        'Archived' => 'Archivado',
        'Published' => 'Publicado'
      ],
      'type' => [
        'Article' => 'Artículo'
      ]
    ],
    'tooltips' => [
      'portals' => 'El artículo estará disponible solo en los portales especificados.'
    ],
    'presetFilters' => [
      'published' => 'Publicado'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Crear categoría',
      'Manage Categories' => 'Administrar categorías',
      'Articles' => 'Artículos'
    ],
    'links' => [
      'articles' => 'Artículos'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear posible cliente',
      'Convert' => 'Convertir',
      'convert' => 'convertir'
    ],
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo',
      'title' => 'Título',
      'website' => 'Sitio web',
      'phoneNumber' => 'Teléfono',
      'accountName' => 'Nombre de la cuenta',
      'doNotCall' => 'No llamar',
      'address' => 'Dirección',
      'status' => 'Estado',
      'source' => 'Toma de contacto',
      'opportunityAmount' => 'Costo de oportunidad',
      'opportunityAmountConverted' => 'Costo de oportunidad (convertido)',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'convertedAt' => 'Convertido en',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de objetivos',
      'targetList' => 'Lista de objetivos',
      'industry' => 'Industria',
      'acceptanceStatus' => 'Estado de aceptación',
      'opportunityAmountCurrency' => 'Moneda del costo de oportunidad',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)',
      'originalEmail' => 'Correo original'
    ],
    'links' => [
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registros de la campaña',
      'campaign' => 'Campaña',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'cases' => 'Tickets',
      'documents' => 'Documentos'
    ],
    'options' => [
      'status' => [
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En proceso',
        'Converted' => 'Convertidos',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto'
      ],
      'source' => [
        'Call' => 'Llamada',
        'Email' => 'Correo',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'actual' => 'Abiertos',
      'converted' => 'Convertidos'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'storeSentEmails' => 'Almacenar correos enviados',
      'startAt' => 'Fecha de inicio',
      'fromAddress' => 'De (email)',
      'fromName' => 'De (nombre):',
      'replyToAddress' => 'Responder a (dirección)',
      'replyToName' => 'Responder a (nombre)',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de correo',
      'inboundEmail' => 'Cuenta de correo',
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'optOutEntirely' => 'Dar de baja completamente',
      'smtpAccount' => 'Cuenta SMTP'
    ],
    'links' => [
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'queueItems' => 'Elementos en cola',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de correo',
      'inboundEmail' => 'Cuenta de correo'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Borrador',
        'Pending' => 'Pendiente',
        'In Process' => 'En proceso',
        'Complete' => 'Completada',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falló'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Crear correo masivo',
      'Send Test' => 'Enviar prueba',
      'System SMTP' => 'Sistema SMTP',
      'system' => 'sistema',
      'group' => 'grupo'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Seleccione al menos un objetivo.',
      'testSent' => 'Se supone que el/los email/s de preuebas fueron enviados'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Las direcciones de correo de los destinatarios que se desuscriban serán marcadas como dadas de baja y no van a recibir ningún correo masivo.',
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
      'storeSentEmails' => 'Los correos se almacenarán en el CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actuales',
      'complete' => 'Completo'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estado de aceptación',
      'dateStartDate' => 'Fecha de inicio (todo el día)',
      'dateEndDate' => 'Fecha de finalización (todo el día)',
      'isAllDay' => 'Es todo el día',
      'sourceEmail' => 'Correo de origen',
      'uid' => 'UID',
      'joinUrl' => 'URL para unirse'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin celebrar'
      ],
      'acceptanceStatus' => [
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar como celebrada',
      'setNotHeld' => 'Marcar como No celebrada'
    ],
    'labels' => [
      'Create Meeting' => 'Crear reunión',
      'Set Held' => 'Marcar como celebrada',
      'Set Not Held' => 'Marcar como No celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
      'Send Cancellation' => 'Enviar cancelación',
      'on time' => 'a tiempo',
      'before' => 'antes',
      'All-Day' => 'Todo el día',
      'Acceptance' => 'Aceptación'
    ],
    'presetFilters' => [
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De hoy'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Se enviarán correos de invitación a los asistentes seleccionados.',
      'sendCancellationsToSelectedAttendees' => 'Se enviarán correos de cancelación a los asistentes seleccionados.',
      'selectAcceptanceStatus' => 'Establece tu estado de aceptación.',
      'nothingHasBeenSent' => 'No se ha enviado nada'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa de ventas',
      'amount' => 'Ingresos esperados',
      'probability' => 'Probabilidad de ganar (%)',
      'leadSource' => 'Toma de contacto del posible cliente',
      'doNotCall' => 'No llamar',
      'closeDate' => 'Fecha esperada de cierre',
      'contacts' => 'Contactos',
      'contact' => 'Contacto (principal)',
      'description' => 'Descripción',
      'amountConverted' => 'Cantidad (convertido)',
      'amountWeightedConverted' => 'Cantidad Ponderada',
      'campaign' => 'Campaña',
      'originalLead' => 'Posible cliente de origen',
      'amountCurrency' => 'Monto de la Moneda',
      'contactRole' => 'Rol de contacto',
      'lastStage' => 'Última etapa'
    ],
    'links' => [
      'contacts' => 'Contactos',
      'contact' => 'Contacto (principal)',
      'documents' => 'Documentos',
      'campaign' => 'Campaña',
      'originalLead' => 'Posible cliente de origen'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Proposal' => 'Propuesta',
        'Negotiation' => 'Negociación',
        'Needs Analysis' => 'Análisis de necesidades',
        'Value Proposition' => 'Propuesta de valor',
        'Id. Decision Makers' => 'Identificar tomador de decisiones',
        'Perception Analysis' => 'Análisis de percepcion',
        'Proposal/Price Quote' => 'Propuesta/Presupuesto',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado ganado',
        'Closed Lost' => 'Cerrado perdido'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Crear oportunidad'
    ],
    'presetFilters' => [
      'open' => 'Abiertos',
      'won' => 'Ganados',
      'lost' => 'Perdido'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Nombre',
      'description' => 'Descripción',
      'entryCount' => 'Contador de entrada',
      'optedOutCount' => 'Contador de bajas',
      'campaigns' => 'Campañas',
      'endDate' => 'Fecha de finalización',
      'targetLists' => 'Lista de objetivos',
      'includingActionList' => 'Incluyendo',
      'excludingActionList' => 'Excluyendo',
      'targetStatus' => 'Estado del objetivo',
      'isOptedOut' => 'Se dieró de baja',
      'sourceCampaign' => 'Campaña de origen',
      'category' => 'Categoría'
    ],
    'links' => [
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'campaigns' => 'Campañas',
      'massEmails' => 'Correos masivos',
      'category' => 'Categoría'
    ],
    'options' => [
      'type' => [
        'Email' => 'Correo',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Boletín de noticias'
      ],
      'targetStatus' => [
        'Opted Out' => 'Se dieron de baja',
        'Listed' => 'Listados'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Crear una lista de objetivos',
      'Opted Out' => 'Se dieron de baja',
      'Cancel Opt-Out' => 'Cancelar darse de baja',
      'Opt-Out' => 'Darse de baja'
    ]
  ],
  'TargetListCategory' => [
    'labels' => [
      'Create TargetListCategory' => 'Crear categoría'
    ],
    'links' => [
      'targetLists' => 'Listas de objetivos'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'dateStartDate' => 'Fecha de Inicio (todo el día)',
      'dateEndDate' => 'Fecha de finalización (todo el día)',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
      'account' => 'Cuenta',
      'dateCompleted' => 'Fecha de completado',
      'attachments' => 'Adjuntos',
      'reminders' => 'Recordatorios',
      'contact' => 'Contacto',
      'originalEmail' => 'Correo original'
    ],
    'links' => [
      'attachments' => 'Adjuntos',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'email' => 'Correo'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Sin empezar',
        'Started' => 'Comenzado',
        'Completed' => 'Completado',
        'Canceled' => 'Cancelado',
        'Deferred' => 'Diferido'
      ],
      'priority' => [
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ]
    ],
    'labels' => [
      'Create Task' => 'Crear tarea',
      'Complete' => 'Completada',
      'overdue' => 'atrasado'
    ],
    'presetFilters' => [
      'actual' => 'Abiertos',
      'completed' => 'Completado',
      'deferred' => 'Diferido',
      'todays' => 'De hoy',
      'overdue' => 'Atrazadas'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Responder al correo'
    ]
  ],
  'CCobro' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CCobro' => 'Crear Cobro'
    ]
  ],
  'CCompaias' => [
    'fields' => [
      'cdigoCorredor' => 'Código Corredor',
      'contactoCot' => 'Contacto Cot',
      'correoCot' => 'Correo Cot',
      'contReclamos' => 'Cont Reclamos',
      'correoReclamos' => 'Correo Reclamos',
      'contactoP' => 'Contacto P',
      'correoP' => 'Correo P'
    ],
    'links' => [],
    'labels' => [
      'Create CCompaias' => 'Crear Compaias'
    ]
  ],
  'CCotizaciones' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CCotizaciones' => 'Crear Cotización'
    ]
  ],
  'CEntidades' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CEntidades' => 'Crear Entidad'
    ]
  ],
  'CExpediente' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CExpediente' => 'Crear Expediente'
    ]
  ],
  'CPliza' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CPliza' => 'Crear Póliza'
    ]
  ],
  'CRamo' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create CRamo' => 'Crear Ramo'
    ]
  ],
  'CReclamos' => [
    'fields' => [
      'indentificador' => 'Indentificador',
      'fechaDeReclamo' => 'Fecha de Reclamo',
      'iDPliza' => 'ID Póliza',
      'estadoDeReclamo' => 'Estado de reclamo'
    ],
    'links' => [],
    'labels' => [
      'Create CReclamos' => 'Crear Reclamo'
    ],
    'options' => [
      'estadoDeReclamo' => [
        'Resuelto' => 'Resuelto',
        'En Pausa' => 'En pausa',
        'Documentación' => 'Documentación',
        'Iniciado' => 'Iniciado'
      ]
    ]
  ]
];
