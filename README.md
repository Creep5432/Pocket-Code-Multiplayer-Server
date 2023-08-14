# Pocket Code Multiplayer Server
## Intro
This is a simple PHP server that can be used for online multiplayer games on Pocket Code. Pocket Code sadly only supports HTTP/HTTPS requests, so they're used instead of Websockets.

## API Handling
To get and send requests to the PHP server. Some parameters are needed to be set. Sadly Pocket Code only supports GET requests, so we'll use some url parameters.
The parameters we'll use are `Data` and `RoomID`. The RoomID is the room we'll store the Data parameter in. The Data parameter is stored in one of ten slots randomly. If both parameters are set, the API will return all slot data stored in the room. The client will then create and modify player data accordingly.
### API Examples
If our RoomID is equal to "Banana" and the Data is equal to "Apple". The request should look like this:
`https://[SERVERIP]?RoomID=Banana&Data=Apple`

## Previous Server Archives
There also exists some previous code for the other ones I've previously had. They were used for the original version and infinite slots version of the game **Multiplayer Testing Grounds**. I wasn't good at programming in PHP back then, so that's why they're so horribly made. If you want to see dumpster fire, go ahead and see the archives. The only reason I still have them up is so that people can still play with other people.
