<?php

/**
 * @file
 * podcast_episodes.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function podcast_episodes_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create podcast_episode content'.
  $permissions['create podcast_episode content'] = array(
    'name' => 'create podcast_episode content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete any podcast_episode content'.
  $permissions['delete any podcast_episode content'] = array(
    'name' => 'delete any podcast_episode content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete own podcast_episode content'.
  $permissions['delete own podcast_episode content'] = array(
    'name' => 'delete own podcast_episode content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit any podcast_episode content'.
  $permissions['edit any podcast_episode content'] = array(
    'name' => 'edit any podcast_episode content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit own podcast_episode content'.
  $permissions['edit own podcast_episode content'] = array(
    'name' => 'edit own podcast_episode content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
