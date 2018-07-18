<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 30/06/2018
 * Time: 09:25
 */

class NotificationInspina
{

    /**
     * @param string $title
     * @param string $message
     * @return array
     */
    private static function NotificationInspinaSuccessMixed(string $title, string $message): array
    {
        global $sql;
        global $lang;
        global $user;

        if ($sql instanceof Sql)
        {
            $command = 'toastr["success"]("' . $message . '", "' . $title . '");';

            $result = $sql->insert("notifications", array("toastr" => $command, "userid" => $user->getId(), "userip" => $user->getIp()));
            if ($result["execute"] == true)
                return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_validate"]), "value" => 0, "title" => "Succès", "cmd" => $command));
            return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_not_validate"]), "value" => 1, "title" => "Error", "cmd" => $command));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error", "cmd" => ""));
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    private static function NotificationInspinaSuccessString(string $title, string $message): string
    {
        $mixed = self::NotificationInspinaSuccessMixed($title, $message);
        return ($mixed["msg"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return int
     */
    private static function NotificationInspinaSuccess(string $title, string $message): int
    {
        $mixed = self::NotificationInspinaSuccessMixed($title, $message);
        return ($mixed["value"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return array
     */
    private static function NotificationInspinaDangerMixed(string $title, string $message): array
    {
        global $sql;
        global $lang;
        global $user;

        if ($sql instanceof Sql)
        {
            $command = 'toastr["danger"]("' . $message . '", "' . $title . '");';

            $result = $sql->insert("notifications", array("toastr" => $command, "userid" => $user->getId(), "userip" => $user->getIp()));
            if ($result["execute"] == true)
                return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_validate"]), "value" => 0, "title" => "Succès", "cmd" => $command));
            return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_not_validate"]), "value" => 1, "title" => "Error", "cmd" => $command));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error", "cmd" => ""));
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    private static function NotificationInspinaDangerString(string $title, string $message): string
    {
        $mixed = self::NotificationInspinaDangerMixed($title, $message);
        return ($mixed["msg"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return int
     */
    private static function NotificationInspinaDanger(string $title, string $message): int
    {
        $mixed = self::NotificationInspinaDangerMixed($title, $message);
        return ($mixed["value"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return array
     */
    private static function NotificationInspinaWarningMixed(string $title, string $message): array
    {
        global $sql;
        global $lang;
        global $user;

        if ($sql instanceof Sql)
        {
            $command = 'toastr["warning"]("' . $message . '", "' . $title . '");';

            $result = $sql->insert("notifications", array("toastr" => $command, "userid" => $user->getId(), "userip" => $user->getIp()));
            if ($result["execute"] == true)
                return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_validate"]), "value" => 0, "title" => "Succès", "cmd" => $command));
            return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_not_validate"]), "value" => 1, "title" => "Error", "cmd" => $command));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error", "cmd" => ""));
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    private static function NotificationInspinaWarningString(string $title, string $message): string
    {
        $mixed = self::NotificationInspinaWarningMixed($title, $message);
        return ($mixed["msg"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return int
     */
    private static function NotificationInspinaWarning(string $title, string $message): int
    {
        $mixed = self::NotificationInspinaWarningMixed($title, $message);
        return ($mixed["value"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return array
     */
    private static function NotificationInspinaInfoMixed(string $title, string $message): array
    {
        global $sql;
        global $lang;
        global $user;

        if ($sql instanceof Sql)
        {
            $command = 'toastr["info"]("' . $message . '", "' . $title . '");';

            $result = $sql->insert("notifications", array("toastr" => $command, "userid" => $user->getId(), "userip" => $user->getIp()));
            if ($result["execute"] == true)
                return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_validate"]), "value" => 0, "title" => "Succès", "cmd" => $command));
            return (array("msg" => sprintf($lang["fr"]["sql_insert_notification_not_validate"]), "value" => 1, "title" => "Error", "cmd" => $command));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error", "cmd" => ""));
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    private static function NotificationInspinaInfoString(string $title, string $message): string
    {
        $mixed = self::NotificationInspinaInfoMixed($title, $message);
        return ($mixed["msg"]);
    }

    /**
     * @param string $title
     * @param string $message
     * @return int
     */
    private static function NotificationInspinaInfo(string $title, string $message): int
    {
        $mixed = self::NotificationInspinaInfoMixed($title, $message);
        return ($mixed["value"]);
    }


    /**
     * @param array $notifs
     * @return integer
     */
    public static function NotificationInspinaBuild(array $notifs): int
    {
        if ($notifs["value"] == 0)
            return (self::NotificationInspinaSuccess($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] >= 1 && $notifs["value"] != 42)
            return (self::NotificationInspinaWarning($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] == -1)
            return (self::NotificationInspinaDanger($notifs["title"], $notifs["msg"]));
        else
            return (self::NotificationInspinaInfo($notifs["title"], $notifs["msg"]));
    }

    /**
     * @param array $notifs
     * @return string
     */
    public static function NotificationInspinaBuildString(array $notifs): string
    {
        if ($notifs["value"] == 0)
            return (self::NotificationInspinaSuccessString($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] >= 1 && $notifs["value"] != 42)
            return (self::NotificationInspinaWarningString($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] == -1)
            return (self::NotificationInspinaDangerString($notifs["title"], $notifs["msg"]));
        else
            return (self::NotificationInspinaInfoString($notifs["title"], $notifs["msg"]));
    }

    /**
     * @param array $notifs
     * @return array
     */
    public static function NotificationInspinaBuildMixed(array $notifs): array
    {
        if ($notifs["value"] == 0)
            return (self::NotificationInspinaSuccessMixed($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] >= 1 && $notifs["value"] != 42)
            return (self::NotificationInspinaWarningMixed($notifs["title"], $notifs["msg"]));
        else if ($notifs["value"] == -1)
            return (self::NotificationInspinaDangerMixed($notifs["title"], $notifs["msg"]));
        else
            return (self::NotificationInspinaInfoMixed($notifs["title"], $notifs["msg"]));
    }
}