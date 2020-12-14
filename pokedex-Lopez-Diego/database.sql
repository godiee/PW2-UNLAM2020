CREATE DATABASE pokemons_Lopez_diego;

USE pokemons_Lopez_diego;

CREATE TABLE pokemon (
idPokemon INT NOT NULL,
nombre VARCHAR(50) NOT NULL,
gif VARCHAR(150) NOT NULL,
tipo VARCHAR(50) NOT NULL,
descripcion VARCHAR(500) NOT NULL,
imagen VARCHAR(150) NOT NULL,
PRIMARY KEY (idPokemon));

CREATE TABLE usuario(
id_usuario INT NOT NULL AUTO_INCREMENT,
user_name VARCHAR(50) UNIQUE NOT NULL,
clave VARCHAR(50) NOT NULL,
PRIMARY KEY (id_usuario));

INSERT INTO pokemon(idPokemon,nombre,gif,tipo,descripcion,imagen)
			VALUES(92,
                  'Gastly',
                  'https://img.pokemondb.net/sprites/black-white/anim/normal/gastly.gif',
                  'recursos/img/fantasma.gif',
                  'EstÃ¡ hecho de una masa negra gaseosa con un aura de gas violeta a su alrededor la cual es venenosa y asfixiarÃ­a a la mayorÃ­a de mortales. Gastly se asemeja al cuerpo de un Hitodama (tÃ©rmino del folclore japonÃ©s que hace referencia a la apariciÃ³n de las almas cuando abandonan el cuerpo antes de ir al otro mundo).',
                  'https://img.pokemondb.net/artwork/large/gastly.jpg'),
                  
				  (59,
                  'Arcanine',
                  'https://img.pokemondb.net/sprites/black-white/anim/normal/arcanine.gif',
                  'recursos/img/fuego.gif',
                  'Su nombre estÃ¡ formado por la uniÃ³n de las palabras en inglÃ©s arcane (arcano), y canine (canino, familia a la que pertenecen los perros). Su nombre japonÃ©s, ã‚¦ã‚¤ãƒ³ãƒ‡ã‚£ Windy, procede de esa misma palaba en inglÃ©s. Esta significa \"ventoso\", haciendo referencia a la gran velocidad de este PokÃ©mon, comparable con la rapidez de los grandes vientos.',
                  'https://img.pokemondb.net/artwork/large/arcanine.jpg'),
                  
                  (65,
				  'Alakazam',
				  'https://img.pokemondb.net/sprites/black-white/anim/normal/alakazam.gif',
				  'recursos/img/psy.gif',
				  'Al igual que Abra y de Kadabra, Alakazam es una palabra para hechizos muy utilizada.\r\nSu nombre en japonÃ©s, Foodin, es probablemente una referencia a Jean EugÃ¨ne Robert-Houdin o a Harry Houdini, ambos ilusionistas famosos.',
                  'https://img.pokemondb.net/artwork/large/alakazam.jpg');

INSERT INTO usuario(user_name,clave)
			VALUES("admin", "21232f297a57a5a743894a0e4a801fc3");