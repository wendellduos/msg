<?php
  if (!$_POST['name']) {
    header("Location: http://localhost:8080/");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($_POST['name']) ?> - chat com Wendel</title>
    <link rel="stylesheet" href="./stylesheets/styles.css" />
    <link rel="stylesheet" href="./stylesheets/chat.css" />
  </head>
  <body>
    <header>
      <div id="users-circles-top">
        <div class="user-circle large" id="wendel-circle">W</div>
        <div class="user-circle large" id="guest-circle"><?= substr($_POST['name'], 0, 1); ?></div>
      </div>
      <div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          version="1.1"
          id="burger-menu-icon"
          x="0px"
          y="0px"
          viewBox="0 0 512 512"
          style="enable-background: new 0 0 512 512; fill: var(--clear1)"
          xml:space="preserve"
          width="23"
          height="23"
        >
          <g>
            <circle cx="256" cy="53.333" r="53.333" />
            <circle cx="256" cy="256" r="53.333" />
            <circle cx="256" cy="458.667" r="53.333" />
          </g>
        </svg>
      </div>
    </header>
    <main>
      <div class="local-msg"><span>Mensagem de teste!</span></div>
      <div class="external-msg"><span>Hello, world!</span></div>
    </main>
    <div id="msg-container">
      <input type="text" id="msg-body" />
      <button type="button" id="send-btn">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          id="Layer_1"
          data-name="send-msg-icon"
          viewBox="0 0 24 24"
          width="25"
          height="25"
        >
          <path
            d="M5.521,19.9h5.322l3.519,3.515a2.035,2.035,0,0,0,1.443.6,2.1,2.1,0,0,0,.523-.067,2.026,2.026,0,0,0,1.454-1.414L23.989,1.425Z"
          />
          <path d="M4.087,18.5,22.572.012,1.478,6.233a2.048,2.048,0,0,0-.886,3.42l3.495,3.492Z" />
        </svg>
      </button>
    </div>
    <script src="./scripts/messages.js"></script>
  </body>
</html>