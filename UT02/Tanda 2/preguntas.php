<?php
    $preguntas = [
        [
            "pregunta" => "¿En qué lugar se ejecuta el código PHP?",
            "respuestas" =>
            [
                "Servidor",
                "Cliente"
            ],
            "correcta" => 0
        ],
        [
            "pregunta" => "¿Cuáles de estas son marcas para la inserción del código PHP en las páginas HTML?",
            "respuestas" =>
            [
                "&lt;?php ?&gt;",
                "&lt;php&gt; &lt;/php&gt;",
                '<# #>'
            ],
            "correcta" => 0
        ],
        [
            "pregunta" => "¿En qué atributo de un formulario especificamos la página a la que se van a enviar los datos del mismo?",
            "respuestas" =>
            [
                "name",
                "file",
                "action",
                "description"
            ],
            "correcta" => 2
        ],
        [
            "pregunta" => "¿Cuál de estas instrucciones está correctamente escrita en PHP?",
            "respuestas" =>
            [
                "if (a=0) print a",
                "if (a==0) echo 'hola mundo';",
                "if (a==0) { echo ok }",
                "if (a==0): print a;"
            ],
            "correcta" => 1
        ],
        [
            "pregunta" => " ¿Cuál de estas instrucciones PHP imprimirá por pantalla correctamente el mensaje “Hola Mundo” en letra negrita?",
            "respuestas" =>
            [
                "print < strong >Hola Mundo < /strong>;",
                "print (< strong>Hola Mundo< /strong>);",
                'print ("< strong>Hola Mundo < /strong>");'

            ],
            "correcta" => 2
        ],
        [
            "pregunta" => "Dos de las formas de pasar los parámetros entre páginas PHP son:",
            "respuestas" =>
            [
                "Require e Include",
                "Get y Put",
                "Post y Get",
                "Into e Include"
            ],
            "correcta" => 2
        ],
        [
            "pregunta" => "¿Cuál de estas instrucciones se utiliza para realizar una consulta a una base de datos MySQL?",
            "respuestas" =>
            [
                'mysql_query',
                'mysql_access',
                'mysql_db_access'
            ],
            "correcta" => 0
        ],
        [
            "pregunta" => "Un array es...",
            "respuestas" =>
            [
                'Un conjunto de caracteres alfanuméricos',
                'Un sistema para convertir una variable de texto en un número',
                'Un conjunto de elementos'
            ],
            "correcta" => 2
        ],
        [
            "pregunta" => "¿Cómo se define una variable de tipo string en PHP?",
            "respuestas" =>
            [
                'char str;',
                'string str;',
                'En PHP no se define el tipo de las variables explícitamente'
            ],
            "correcta" => 2
        ],
        [
            "pregunta" => 'Tenemos el siguiente código: $a=”10”; $b=$a + 2; ¿Cuál será el valor de $b?',
            "respuestas" =>
            [
                '"12"',
                '12',
                '"102"',
                'Ninguno (no se puede sumar un número a una cadena)'
            ],
            "correcta" => 1
        ]
    ];
?>