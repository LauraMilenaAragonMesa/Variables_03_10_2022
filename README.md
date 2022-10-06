## GLOSARIO PHP

**1. Que es Camel-case:**

Es una estructura de escritura de palabras compuestas en donde se escribe con mayúscula la primera letra de la segunda palabra. Ejemplo: idUsuario, dirUsuario.

**2. Estructura básica de los lenguajes de programación:**

La programación estructurada es una forma de escribir programas de computadora deforma clara, utilizando únicamente tres estructuras: 

**Secuenciales:** cuando una instrucción del programa sigue a otra. Constan de Entrada, Proceso y Salida.

**Selección o decisión:** acciones en las que la ejecución de alguna dependerá de que se cumplan una o varias condiciones.  Pueden ser simples, dobles, compuestas y múltiples.

**Repetición o Iteración:** cuando un proceso se repite en tanto cierta condición sea establecida para finalizar ese proceso.  Estas pueden ser: Mientras (While), Desde/Para (For) y Repetir (Repeat).

**3. Qué es un pseudo-Lenguaje programación:**

Es un lenguaje de especificación de algoritmos. Se utiliza como un primer borrador del programa en la fase de diseño, para "perfilar" el código fuente, centrándose en la lógica y los puntos de control de éste sin tener que ir ligado a la sintaxis de un lenguaje de programación.

**3.1 Qué es un lenguaje de programación**:

 Es el conjunto de instrucciones a través del cual los humanos interactúan con las computadoras. Un lenguaje de programación nos permite comunicarnos con las computadoras a través de algoritmos e instrucciones escritas en una sintaxis que la computadora entiende

**4. Qué es código limpio:**

Un código limpio es aquel que fácil y sencillo de entender y poder modificar.

**4.1 Qué es el código sucio:**

Es un código sucio aquel que es difícil de entender y modificar, el cual puede ser demasiado extenso y que causa problemas a la hora de leerlo y entenderlo.

**5. Qué son variables:**

Es un elemento en el cual podemos guardar un dato o valor que puede cambiar en el proceso de ejecución.

**6. Maneras de escribir variables en PHP:**

Son representadas con un signo de dólar ($) seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas. Para declarar un nombre de variable válido, éste tiene que empezar con una letra (o si no empieza con una letra, tendrá que hacerlo con un carácter de subrayado), seguido de cualquier número de letras, números y caracteres de subrayado, sin espacios.

**7 tipos de datos primitivos en PHP**

**Booleano (boolean):** Representa valores de lógica binaria, esto es 2 valores, que normalmente representan falso o verdadero.

**Cadena (string):** Son tipos de datos que se componen por uno o más caracteres alfanuméricos, esto quiere decir que contienen números, letras y caracteres.

**Arreglos (array):** Es un tipo de dato estructurado que permite almacenar un conjunto de datos homogéneo, es decir, todos ellos del mismo tipo y relacionados.

**Flotante (float):**

Es un tipo de datos que se usa para números decimales.

**Números enteros (Integers):**

Contiene un número entero con un formato de complemento a dos de 64 bits. Esto proporciona un rango de valores entre -9223372036854775808 y +9223372036854775807.

**Objetos (object):**

Es una instancia de una clase, y puedes crear múltiples instancias de la misma clase.

**Iteradores (iterator):**

Un iterador es un seudotipo introducido en PHP 7.1 y se puede usar como tipo de parámetro para indicar que una función requiere un conjunto de valores, pero que no importa la forma de dicho conjunto ya que lo importante es que se pueda recorrer el conjunto de valores.

**8. Declaración de variables:**

En PHP las variables se representan con un signo de dólar seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas.

**8.1 Inicialización de variables:**

Para inicializar una variable se declara la variable y se le asigna el valor que se le desea dar. No es necesario inicializar variables en PHP, sin embargo, es una muy buena práctica. Las variables no inicializadas tienen un valor predeterminado de acuerdo a su tipo dependiendo del contexto en el que son usadas - las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (p.ej. usadas en echo) se establecen como una cadena vacía y los arrays se convierten en un array vacío.

**9. Para qué es el punto y coma (;) en PHP:**

El punto y coma le dice al programa que ha llegado al final de esa instrucción. Le permite saber que el siguiente fragmento de texto es una nueva instrucción.

**10. Palabras reservadas del sistema:**

Son identificadores reservados predefinidos que tienen un significado especial y no se pueden utilizar como identificadores en sus programas, excepto si llevan delante el carácter @ como prefijo. Ejemplo: echo, clone, callable, do, or, global.

**11. Qué son los operadores:**

Los operadores son los símbolos que nos permiten expresar las operaciones entre los datos. Entre ellos tenemos:

**Aritméticos: ** + Suma, - Resta, * Multiplicación.

**De asignación:** =Asignación de valor, +=Suma y asignación, -=Resta y asignación.

**De comparación:** Comprueba si son iguales, !=Comprueba si son distintos, ===Comprueba si son iguales y de exactamente el mismo tipo.

**Lógicos:** and Operación lógica "y", verdadero si ambos son verdaderos; or Operación lógica "o", verdadero si uno de ellos es verdadero; ! Operación de negación, si era verdadero pasa a falso y viceversa.

**De incremento:** ++$a Pre-incremento, $a++ Post-incremento, –$a Pre-decremento, $a– Post-decremento.

**Operadores de cadenas:** 

**Concatenación:**

$saludo = "Bienvenido a ";
$nombre = "Arsys.es";
$LaBienvenida = $saludo . $nombre;

**Precedencia de operadores:**
La precedencia es un conjunto de reglas y orden por el que se irán evaluando los operadores. Para esto existen los paréntesis. Con ellos indicamos qué operadores tienen que resolverse en primera instancia.

**12. Ítems en las colecciones de datos PHP:**



Las colecciones de datos nos permite realizar operaciones con arreglos de datos, de una forma mucho más sencilla y fácil de leer.

**13.Diferencia entre echo / var_dump / print_r :** 

**echo** es un constructor de lenguaje que muestra cadenas de texto. Puede imprimir más de una separadas por coma.

**print_r** es una función. Se utiliza para motrar el contenido de una variable de un modo *humanamente legible*. El segundo parámetro determina si se quiere recibir la respuesta o sólo mostrarlo en pantalla.

**var_dump** también es una función. Su uso es similar a print_r, sólo que con esta función no es posible obtener el resultado para almacenar (sólo lo mostrará en pantalla). var_dump aporta algo de información más detallada (por ejemplo, el tipo de datos de cada variable, print_r da una visión algo más simplificada).





