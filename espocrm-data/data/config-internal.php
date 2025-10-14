<?php
return [
  'database' => [
    'host' => 'espocrm-db',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'espocrm',
    'password' => 'tu_contraseña_db_super_secreta',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1755628497.424888,
  'cryptKey' => 'dde3c221f89818bfe8933cbce49daa14',
  'hashSecretKey' => 'bce761b46cc4a7dafdae71af23563f97',
  'defaultPermissions' => [
    'user' => 'www-data',
    'group' => 'www-data'
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '12.0.2',
  'instanceId' => '5af95da9-4c24-491c-b383-292b3a01f8c0',
  'webSocketZeroMQSubmissionDsn' => 'tcp://espocrm-websocket:7777',
  'webSocketZeroMQSubscriberDsn' => 'tcp://*:7777'
];
