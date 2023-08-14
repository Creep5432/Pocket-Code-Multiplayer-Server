<?php
        //Variables
        $JSON = json_decode(file_get_contents("Data.json"), true);

        //Check if RoomID and Data get parameters exists
        if(isset($_GET["RoomID"]) && isset($_GET["Data"])) {
                //If the room exists just send a packet, otherwise make a new room and send the packet
                if (array_key_exists($_GET["RoomID"], $JSON)) {
                        SendPacket($_GET["Data"]);
                        echo json_encode($JSON[$_GET["RoomID"]]);
                } else {
                        MakeNewRoom($_GET["RoomID"]);
                        SendPacket($_GET["Data"]);
                        echo json_encode($JSON[$_GET["RoomID"]]);
                }
        } else {
                echo "Hi person that is viewing the api.";
        }

        //Functions for sending packets and making rooms
        function SendPacket($Data) {
                global $JSON;
                $JSON[htmlspecialchars($_GET["RoomID"])]["Slot".rand(1,10)] = htmlspecialchars($Data);
                file_put_contents("Data.json", json_encode($JSON));
        }

        function MakeNewRoom($RoomID) {
                global $JSON;
                $NewRoom = array();
                for ($i = 1; $i <= 10; $i++) {
                        $NewRoom["Slot".$i] = "";
                }
                $JSON[htmlspecialchars($RoomID)] = $NewRoom;
                file_put_contents("Data.json", json_encode($JSON));
        }
?>
