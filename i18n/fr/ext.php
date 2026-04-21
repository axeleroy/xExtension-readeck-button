<?php

return array(
  'readeckButton' => array(
    'configure' => array(
      'api_token' => 'Jeton API',
      'api_token_description' => '<ul class="rb_listedNumbers">
        <li>Rendez-vous sur votre instance Readeck et naviguez vers \'<c><votre_instance_readeck>/profile/tokens</c>\'</li>
        <li>Créez un nouveau jeton API avec au moins la permission \'<c>Bookmarks : Écriture seule</c>\'</li>
        <li>Entrez l\'URL de votre instance Readeck et votre jeton API, puis cliquez sur \'Se connecter à Readeck\'</li>
      </ul>
      <span>Les détails sont disponible sur <a href="https://github.com/Joedmin/freshrss-readeck-button" target="_blank">GitHub</a>.',
      'connect_to_readeck' => 'Se connecter à Readeck',
      'username' => 'Nom d\'utilisateur',
      'instance_url' => 'URL de l\'instance Readeck',
      'keyboard_shortcut' => 'Raccourci clavier',
      'extension_disabled' => 'Vous devez activer l\'extension avant de pouvoir vous connecter à Readeck.',
      'connected_to_readeck' => 'Vous êtes connecté en tant que <b>%s</b> à l\'instance Readeck à <b>%s</b>.',
      'revoke_access' => 'Déconnecter de Readeck.',
      'save_changes' => 'Valider',
      'button_location' => 'Position du bouton Readeck. Le raccourci clavier fonctionne même lorsque l\'option \'Caché\' est sélectionnée.',
      'button_location_header_bottom' => 'Lignes du haut et du bas',
      'button_location_header' => 'Ligne du haut',
      'button_location_bottom' => 'Ligne du bas',
      'button_location_hidden' => 'Caché',
      'behavior' => "Comportement",
      'behavior_smart' => "Intelligent",
      'behavior_link' => "Lient",
      'behavior_content' => "Contenu",
      'behavior_description' => '<li><b>Intelligent</b> (par défault) - bascule entre l\'ancien et le nouveau comportement en fonction de la présence d`authentification au flux</li>
      <li><b>Lient</b> (ancien comportement) - envoie uniquement le lien de l\'article et laisse Readeck en récupérer le contenu</li>
      <li><b>Contenu</b> (nouveau comportement) - envoie directement le contenu depuis le flux à Readeck. Utile lorsque les articles sont derrière un paywall mais complets dans le flux.</li>'
    ),
    'notifications' => array(
      'added_article_to_readeck' => '<i>\'%s\'</i> ajouté à Readeck.',
      'failed_to_add_article_to_readeck' => 'L\'ajout de l\'article à Readeck a échoué. Code d\'erreur API Readeck : %s',
      'ajax_request_failed' => 'La requête Ajax a échoué.',
      'authorized_success' => 'Authentification réussie.',
      'authorized_aborted' => 'Authentification annulée.',
      'authorized_failed' => 'L\'authentification a échoué. Code d\'erreur API Readeck : %s',
      'relog_required' => 'Le reconnexion à Readeck est requise. Veuillez vous déconnecter et vous reconnecter dans les paramètres de l\'extension.',
      'request_access_failed' => 'L\'accès à Readeck a échoué. Code d\'erreur API Readeck : %s',
      'article_not_found' => 'Article introuvable.',
      'authorization_revoked' => 'Déconnexion réussie.',
      'changes_saved_sucessfully' => "Changements sauvegardés.",
      'changes_failed' => "Échec de la sauvegarde des changements. La valeur '%s' n\'est pas supportée.",
    )
  ),
);
