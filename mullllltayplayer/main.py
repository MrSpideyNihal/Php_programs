import socket
import threading

players = {}
game_started = False
game_code = "1234"  # Change this to your desired 4-digit code
MAX_PLAYERS = 2  # Define maximum number of players

def game_logic():
    global game_started
    global players
    
    # Implement your game logic here
    pass

def handle_client(client, player_name):
    global game_started
    global players
    
    while True:
        try:
            data = client.recv(1024).decode('utf-8')
            if not data:
                break
            
            if not game_started and data == game_code:
                players[player_name] = client
                client.send("Code accepted. Waiting for other players...\n".encode('utf-8'))

                if len(players) == MAX_PLAYERS:
                    game_started = True
                    game_logic()
            elif game_started:
                client.send("Game in progress. Please wait...\n".encode('utf-8'))
            else:
                client.send("Invalid code or game already started. Please try again.\n".encode('utf-8'))
        except:
            break

def start_server():
    host = "127.0.0.1"  # Change this to your server's IP
    port = 5555  # Choose a port number

    server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    server.bind((host, port))
    server.listen()
    print(f"Server is running on {host}:{port}. Waiting for players to join...")

    while True:
        client, address = server.accept()
        print(f"Connection from {address} has been established!")

        player_name = client.recv(1024).decode('utf-8')
        threading.Thread(target=handle_client, args=(client, player_name)).start()

start_server()
