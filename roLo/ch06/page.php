<?php
class Page {

    public $content;
    public $title = "TLA Consulting Pty Ltd";
    public $keywords = "TLA Consulting, Three Letter Abbreviation, some of my best are searching engines";
    public $buttons = array(
        "Home" => "home.php",
        "Contact" => "contact.php",
        "Services" => "services.php",
        "Site Map" => "map.php"
    );

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function display() {
        echo "<html>\n<head>\n";
        $this->displayTitle();
        $this->displayKeywords();
        $this->displayStyles();
        echo "</head>\n<body>\n";
        $this->displayHeader();
        $this->displayMenu($this->buttons);
        echo $this->content;
        $this->displayFooter();
        echo "</body>\n</html>\n";
    }

    public function displayTitle() {
        echo "<title>" . $this->title . "</title>";
    }

    public function displayKeywords() {
        echo '<meta name="keyword" content="' . $this->keywords . '"/>';
    }

    public function displayStyles() {
        ?>
        <link href="styles.css" type="text/css" rel="stylesheet" />
        <?php
    }

    public function displayHeader() {
        ?>
        <header>
            <img src="img/logo.gif" alt="TLA logo" height="70" width="70" />
            <h1>TLA Consulting</h1>
        </header>
        <?php
    }

    public function displayMenu($buttons) {
        echo "<nav>";
        while (list($name, $url) = each($buttons)) {
            $this->displayButton($name, $url, !$this->isURLCurrentPage($url));
        }
        echo "</nav>\n";
    }

    public function isUrlCurrentPage($url) {
        if (strpos($_SERVER['PHP_SELF'], $url) === false) {
            return false;
        }
        else {
            return true;
        }
    }

    public function displayButton($name, $url, $active=true) {
        if ($active) {
            ?>
            <div class="menu-item">
                <a href="<?=$url?>">
                    <img src="img/s-logo.gif" alt="" height="20" width="20" />
                    <span class="menu-text"><?=$name?></span>
                </a>
            </div>
            <?php
        }
        else {
            ?>
            <div class="menu-item">
                <img src="img/side-logo.gif" />
                <span class="menu-text"><?=$name?></span>
            </div>
            <?php
        }
    }
    public function displayFooter() {
        ?>
        <footer>
            <p>
                &copy; TLA Consulting Pty Ltd.<br />
                Please see our<a href="legal.php">legal information page</a>.
            </p>
        </footer>
        <?php
    }
}
