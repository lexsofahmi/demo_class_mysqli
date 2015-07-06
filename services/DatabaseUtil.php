<?php

class DatabaseUtil {
    private static $dbHost;
    private static $dbUser;
    private static $dbPass;
    private static $dbName;

    public static function setConnectServer($dbHost, $dbUser, $dbPass) {
        self::$dbHost = $dbHost;
        self::$dbUser = $dbUser;
        self::$dbPass = $dbPass;
    }

    public static function getConnectServer() {
        $conn = mysqli_connect(self::$dbHost, self::$dbUser, self::$dbPass);

        try {
            if (!$conn) throw new Exception("Gak connect");
            else echo "Success <br/>";
        } catch (Exception $conn) {
            echo $conn->getMessage();
        }
    }
}