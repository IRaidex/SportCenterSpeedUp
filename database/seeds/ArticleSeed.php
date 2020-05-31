<?php

use Illuminate\Database\Seeder;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'idArticle' => 1,
                'content' => 'Saltar a la comba durante 10 minutos al día te puede hacer perder hasta 130 calorías. Así, a simple vista, parece el inicio de una buena relación con este ejercicio. Pero hay mucho más. Saltar a la comba es un buen calentamiento para quien realice tablas muy exigentes, o un ejercicio perfecto para ponerte en forma en pocos días. 

La comba es un excelente ejercicio cardiovascular, perfecto para quemar calorías, fortalecer el corazón o recuperar masa ósea. Brazos, piernas, abdomen... son protagonistas de este ejercicio completo que tiene a todo el cuerpo en movimiento. 

Según apunta Alex García, director de FitClub, "saltar a la comba es un ejercicio muy habitual en una tabla de ejercicios para calentar y activar el cuerpo justo antes de comenzar a practicar deporte, ya que involucras cada músculo de tu cuerpo en el ejercicio”, cuenta. 

Para saltar correctamente a la comba debes tener en cuenta la elección de una comba de tu tamaño. O tensar si te sobra. Hombros relajados, mirada al frente y espalda recta, es la clave para que el salto sea perfecto. Los brazos deben estar lo más pegados al cuerpo posible y realizar el movimiento con la muñeca. 

Para que el impacto en las articulaciones, como las rodillas, sea el mínimo, utiliza un buen calzado, y mantén las rodillas ligeramente flexionadas. Si es posible, y para fortalecer el core al máximo, lleva hacia adelante la cadera, y tira de abdominales.',
                'title' => 'El ejercicio de cardio que te pone a punto en pocos días.',
                'picture' => 'articulo1.jpg',
                'tag1' => 'Cardio',
                'tag2' => 'Deporte',
                'tag3' => 'Saludable',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 2,
                'content' => 'Hacer flexiones es uno de los ejercicios más icónicos y populares. También es uno de los más temidos, sobre todo si estás empezando. Pero al mismo tiempo resulta altamente gratificante porque se trata de uno de los ejercicios más completos que se pueden realizar para trabajar el tren superior utilizando el propio peso corporal.

ectorales, deltoides y tríceps son los músculos más involucrados, pero no son los únicos grupos musculares que se activan porque en función de la variante también se puden trabajar los abdominales. Además, hacer flexiones, mejora la flexibilidad y la capacidad cardiovascular y ayuda a quemar calorías.

¿Qué dice la Universidad de Harvard sobre las flexiones?

Por si fuera poco, una investigación de la prestigiosa Universidad de Harvard (EEUU), publicada en la revista en JAMA Network Open, relaciona la capacidad de hacer flexiones con un menor o mayor riesgo de desarrollar una enfermedad cardiovascular en el futuro, por lo que también estamos hablando de un importante marcador para la salud. En este trabajo, los expertos cuantificaron en un 96 por ciento la reducción de riesgo cardiovascular en los hombres capaces de hacer más de 40 flexiones en comparación con aquellos que pudieron hacer menos de diez flexiones.

Aunque el estudio presenta algunas limitaciones debido a lo específico de la muestra, los resultados ponen de manifiesto la importancia de la aptitud física en la salud, y por qué en las revisiones médicas se debería tener más en cuenta esta capacidad.

Rutina de flexiones:

Así pues, compartimos contigo una rutina de flexiones cortesía de Sergio Peinado, licenciado en Ciencias de la Actividad Física y del Deporte, entrenador personal y uno de los influencers del momento en el ámbito del fitness. Estos ejercicios de flexiones ayudan a trabajar pecho, brazos, hombros e incluso abdonminales ya que algunas de las versiones propuestas generan inestabilidad, lo que permite la activación de esta zona.',
                'title' => '5 ejercicios básicos de flexiones para trabajar hombros, brazos, pecho y abdominales',
                'picture' => 'articulo2.jpg',
                'tag1' => 'Ejercicios',
                'tag2' => 'Basicos',
                'tag3' => 'Populares',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 3,
                'content' => '“A medida que vamos envejeciendo, nuestra salud mental y física se resiente. Pero incluso si se incluye una rutina de ejercicios cen una fase avanzada de la vida el beneficio para el cerebro puede ser inmenso". Quien habla es Marc J. Poulin, investigador de la Universidad de Calgary en Alberta (Canadá), que ha liderado una investigación sobre la relación entre el ejercicio aeróbico y la salud cerebral.

 “El ejercicio aeróbico hace que la sangre se mueva a través del cuerpo y también provoca que la sangre llegue al cerebro, particularmente a áreas responsables de la fluidez verbal y las funciones ejecutivas. Nuestro hallazgo puede ser importante, especialmente para adultos mayores en riesgo de Alzheimer y otras demencias y enfermedades cerebrales", explica el expetro.

Aumento del flujo sanguíneo:

Por su parte, el flujo sanguíneo aumentó de un promedio de 51.3 centímetros por segundo (cm/seg) a un promedio de 52.7 cm/seg, un aumento del 2.8%. “El aumento en el flujo sanguíneo con el ejercicio se asoció con una serie de mejoras modestas pero significativas en los aspectos del pensamiento que generalmente disminuyen a medida que envejecemos”, asegura Poulin.

"Nuestro estudio demostró que seis meses de ejercicio vigoroso puede provocar el bombeo de sangre a regiones del cerebro que mejoran específicamente las habilidades verbales, así como la memoria y agudeza mental", añade Poulin, que reconoce que una limistación del estudio fue no comparar los resultados con un grupo control que no hiciera ejercicio, aunque los investigadores trataron de reducir las limitaciones realizando pruebas a los participantes dos veces.
                ',
                'title' => 'El ejercicio aeróbico puede mejorar la salud cerebral en los mayores',
                'picture' => 'articulo3.jpg',
                'tag1' => 'Aeróbico',
                'tag2' => 'Salud',
                'tag3' => 'Mayores',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 4,
                'content' => 'El conjunto de grupos musculares que comprenden abdominales, espalda, caderas, pelvis y glúteos se denomina core (núcleo), y en los últimos tiempos se ha convertido en una verdera obesión para muchos Y con razón. No en vano trabajar bien la zona puede ayudar a prevenir lesiones y a mejorar nuestro desempeño en actividades cotidianas, deportivas y recreativas que requieren que los músculos trabajen juntos y no de forma aislada.

Y es que un core débil puede causar todo tipo de problemas posturales y derivar en la aparición de dolores de cuello, espalda (principalmente lumbar), rodillas y cadera. Los grupos que componen la zona son básicos para el equilibrio y ayudan a estabilizar el cuerpo antes de cualquier movimiento por lo que, de no estar lo suficientemente fortalecidos, obligan al resto de músculos circundantes a compensar, provocando tensión con el paso del tiempo y dolor.

Rutina de entrenamiento:

Por ello es conveniente que no menosprecies la importancia de trabajar la zona. Sergio Peinado, licenciado en Ciencias de la Actividad Física y del Deporte, entrenador personal y uno de los influencers del momento en el ámbito del fitness, compate seis ejercicios, entre ellos variaciones de la plancha, que están orientados a fortalecer el core.
                ',
                'title' => '6 ejercicios para fortalecer el core y los abdominales sin salir de casa',
                'picture' => 'articulo4.jpg',
                'tag1' => 'Fortalecer',
                'tag2' => 'Core',
                'tag3' => 'Casa',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 5,
                'content' => 'La plancha se ha convertido en uno de los ejercicios más recurrentes en la actualidad. Y no es para menos ya que implica trabajar una zona fundamental del cuerpo, el "core", que agrupa una serie de músuculos básicos que a menudo son exigidos en labores cotidianas de todo tipo en nuestro día a día.

Y es que no es de extrañar que la plancha (plank, en inglés) esté considerada como un ejercicio funcional que debería ser incluido en cualquier rutina de entrenamiento. El "core" o núcleo está formado por varios grupos musculares que comprenden abdominales, espalda, caderas, pelvis y glúteos.

Un núcleo débil puede causar todo tipo de problemas posturales que pueden conducir a dolores de espalda y cuello, pero también se pueden dejar notar perfectamente en rodillas y caderas. Aunque sin duda, el mayor problema asociado a la debilidad del core es el dolor lumbar, algo a lo que casi todo el mundo se ha tenido que enfrentar alguna vez.

¿Cómo se hace la plancha y cuánto debe durar?

La postura básica e incial es aquella en la que se apoyan los codos y los antebrazos en el suelo, quedando los codos alineados con los hombros y los brazos en linea recta. Las piernas deben quedar igualmente extendidas y el apoyo debe efectuarse sobre las punteras de los pies. A partir de ahí, hay que hacer fuerza y empujar el cuerpo manteniendo la espalda recta y alineada con las piernas.

La mayoría de los expertos sugieren que entre 10 y 30 segundos es suficiente ya que es preferible hacer múltiples series en pequeños intervalos de tiempo. En este caso al igual que sucede con otros ejercicios, la progersión es básica: a medida que uno se siente más cómodo puede aumentar el tiempo hasta un minuto.
                ',
                'title' => 'Plancha: un ejercicio básico para el "core" en tiempos de confinamiento',
                'picture' => 'articulo5.jpg',
                'tag1' => 'Nutrición',
                'tag2' => 'Fitness',
                'tag3' => 'Salud',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 6,
                'content' => 'La situación provocada por la irrupción del nuevo coronavirus ha hecho saltar por los aires nuestra rutina a todos los niveles. El estado de alarma y el período de confinamiento que debemos afrontar dificulta alguna de nuestras costumbres, peo debemos adaptarnos a las circustancias y tratar por todos los medios de mantener un adecuado estado físico y mental.

Lamentablemente el panorama, lejos de mejorar, parece estancarse y no hay que descartar ya un escenario en el que el período de confinamiento se prolongue más allá de lo previsto. Por ello, la Facultad de Enfermería de la Universidad de Navarra ha elaborado una guía de hábitos saludables para que la situación generada repercuta lo menos posible en nuetro bienestar.

La guía incluye un plan de actividades y buenas prácticas sobre tres aspectos clave: cuidar la alimentación, cuidar los hábitos y cuidar la mente.
                ',
                'title' => '"Mens sana in corpore sano"": consejos básicos para sobrellevar el confinamiento',
                'picture' => 'articulo6.jpg',
                'tag1' => 'Nutrición',
                'tag2' => 'Casa',
                'tag3' => 'Salud',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 7,
                'content' => 'Una nueva investigación de la Universidad de Columbia (EEUU) concluye que determinadas actividades físicas recreativas o de ocio, actividades ocupacionales, tareas domésticas, juegos, deportes o ejercicios programados, como caminar, cultivar un huerto, nadar o bailar, entre otros, producen un mayor volumen cerebral y combaten los efectos del envejecimiento en el cerebro.

El trabajo, que tiene un carácter preliminar, se presentará en la 72ª Reunión Anual de la Academia Americana de Neurología que tendrá lugar en Toronto (Canadá) el próximo mes de abril, pero los resultados indican que el efecto del ejerecicio físico equivale a cuatro años menos de envejecimiento cerebral.

"Estos resultados son emocionantes, ya que sugieren que las personas pueden prevenir potencialmente el encogimiento cerebral y los efectos del envejecimiento en el cerebro simplemente siendo más activos", explica Yian Gu, de la Universidad de Columbia, que utilizó imágenes de resonancia magnética (IRM) para medir los cerebros de personas con un rango de diferentes niveles de actividad.

"Estudios recientes han demostrado que a medida que las personas envejecen, la actividad física puede reducir el riesgo de deterioro cognitivo y demencia. Nuestros hallazgos indican que aquellos que cada semana completaban siete horas de actividad física de baja intensidad, cuatro horas de actividad física moderada o dos horas de actividad física de alta intensidad tenían un volumen cerebral equivalente a cuatro años más joven en envejecimiento cerebral que las personas inactivas", añade el investigado.

Después de ajustar por edad, sexo, educación, raza/etnia y estado del gen APOE, el tamaño promedio del cerebro para aquellos que estaban inactivos fue de 871 centímetros cúbicos en comparación con 883 centímetros cúbicos para aquellos que eran más activos, una diferencia de 12 centímetros cúbicos, o 1,4%, o el equivalente a casi cuatro años de envejecimiento cerebral. Los resultados se mantuvieron similares incluso después de excluir a las personas que tenían un deterioro cognitivo leve.

"Nuestros resultados se suman a la evidencia de que una mayor actividad física está relacionada con un mayor volumen cerebral en las personas mayores. También se basa en la evidencia de que mover el cuerpo con mayor frecuencia a lo largo de la vida puede proteger contra la pérdida de volumen cerebral", concluye GU.
                ',
                'title' => 'El ejercicio físico puede retrasar 4 años el envejecimiento cerebral',
                'picture' => 'articulo7.jpg',
                'tag1' => 'Ejercicio',
                'tag2' => 'Mental',
                'tag3' => 'Salud',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 8,
                'content' => 'Una nueva investigación a cargo de expertos de la Universidad Martín Lutero de Halle-Wittenberg y la Escuela de Medicina de Berlín, ambas ubicadas en Alemania, sugiere que el HIIT, el entrenamiento a intervalos de alta intensidad que alterna fases cortas de ejercicio físico intenso con períodos de recuperación, podría suponer una estrategia adecuada para combatir problemas de salud en la infancia como el sobrepeso o la hipertensión.

En este caso los investigadores, conscientes de que muchos niños no hacen el suficiente ejercicio físico, concibieron un programa en el que integraron este tipo de entrenamiento tan de moda en la actualidad en el devenir habitual de las clases de educación física.

Y es que, los niños no tienen una propensión natural a correr largas distancias, pero sí están más acostumbrados a alternar períodos intensivos de esfuerzo y fases cortas de recuperación, como en los juegos que realizan durante el recreo o en el parque. "Cuanto más intenso es el ejercicio, mayores parecen ser los efectos, incluso en los niños. No se trata de cuánto tiempo dura el ejercicio, sino más bien de su intensidad en un corto período de tiempo”, explica Sascha Ketelhut, uno de los responsables de la investigación.

Buenos resultados en solo 3 meses:

El trabajo, publicado en la revista "International Journal of Sports Medicine", mostró datos muy positivos en niños de 8 a 10 años. Durante 3 meses, los participantes dedicaron los primeros 20 minutos de sus clases habituales de educación física a actividades que implicaban un movimiento intenso acompañadas de música y coreografías, como las carreras de relevos con sprints cortos o el entrenamiento en circuito, que fue interrumpido repetidamente por cortos períodos de recuperación.

Y los resultados mostraron resultados notables: tanto el rendimiento de resistencia como la presión arterial mejoraron significativamente durante el período de prueba. "Curiosamente, esta forma de ejercicio intermitente es precisamente la forma en que los niños se mueven naturalmente y ayuda en la prevención. La presión arterial alta en la niñez a menudo lleva a la presión arterial alta en la edad adulta", comenta Ketelhut.

El experto, apoyado en los resultados, aboga por integrar el HIIT en las clases regulares de educación física, ya que el método de entrenamiento es efectivo y adecuado para los niños, y les motiva a hacer ejercicio. El entrenamiento puede incorporarse fácilmente a un programa deportivo estándar, ya que no requiere mucho tiempo.
                ',
                'title' => 'El HIIT puede ser la solución para combatir el sobrepeso y la hipertensión en la infancia',
                'picture' => 'articulo8.jpg',
                'tag1' => 'Sobrepeso',
                'tag2' => 'Menores',
                'tag3' => 'Salud',
                'userId' => rand(2,4),
            ],

            [
                'idArticle' => 9,
                'content' => 'Durante años, completar 10,000 pasos al día se han convertido en el estándar para quienes intentan mejorar su salud, pero una nueva investigación de la Universidad Brigham Young (Estados Unidos) pone en duda que haya un número de pasos que sea suficiente por sí mismo para evitar o prevenir el aumento de peso. Un estudio que se une a la literaturaa existente que aboga por no obsesionarse con la cifra.

Un reciente trabajo a cargo de expertos del Brigham and Women’s Hospital de Boston (EEUU) analizó los datos de un grupo de mujeres de 72 años de media durante cuatro años. Los datos de la investigación, cuyos resultados fueron publicados en ‘Jama Internal Medicine’, venían a confirmar que lo importante, más allá de obsesionarse con una cifra, es moverse.

No en vano, los investigadores concluyen que el hecho de completar tan solo 4,400 pasos por día se asoció significativamente con un menor riesgo de muerte en comparación con 2,700 pasos por día. El riesgo de muerte continuó disminuyendo cuantos más pasos se daban, pero se estabilizó alrededor de 7.500 pasos por día, cifra sensiblemente menor que los famosos 10.000 pasos y que muchos ‘wearables’ incluyen hoy en día como objetivo saludable.

Y no es la única evidencia que apunta en este sentido. Otro estudio liderado por el profesor Robert Copeland, de la Universidad de Sheffield Hallam (Inglaterra) comparó los datos de dos grupos de voluntarios: quienes completaron los 10.000 pasos y quienes por su parte realizaron tres caminatas al día a ritmo vigoroso por espacio de 10 minutos cada una. Y los resultados indicaron que a pesar de completar un menor número de pasos y de distancia, la intensidad del ejercicio era mayor y por lo tanto más determinante en términos de salud.

10.000 pasos y aumento de peso:

Sin embargo, la nueva investigación trata de dilucidar si los 10.000 tienen algún tipo de incidencia en la prevención del peso. El trabajo, publicado en la revista "Journal of Obesity", analiza los datos de 120 estudiantes de primer año durante sus primeros seis meses de universidad mientras participaban en un experimento de conteo de pasos. Los jóvenes caminaron 10.000, 12.500 o 15.000 pasos al día, seis días a la semana durante 24 semanas, mientras se registraba su ingesta calórica y su peso.

El objetivo del estudio era evaluar si el hecho de superar progresivamente el recuento de pasos recomendado de 10.000 pasos por día (en incrementos del 25%) minimizaría el aumento de peso y grasa. Al final, no importaba si los estudiantes caminaban más de 15.000 pasos; aún así ganaban peso, según los resultados. Los estudiantes del estudio ganaron en promedio alrededor de 1,5 kg durante el período de estudio. Durante el primer año de universidad se suele aumentar de uno a cuatro kilos de peso, según otras investigaciones.

"El ejercicio por sí solo no siempre es la forma más efectiva de perder peso. Si se siguen los pasos, podría tener un beneficio en el aumento de la actividad física, pero nuestro estudio demostró que no se traducirá en el mantenimiento del peso o en la prevención del aumento de peso. El mayor beneficio de las recomendaciones de número de pasos es sacar a la gente de un estilo de vida sedentario. Aunque no evitará el aumento de peso por sí solo, más pasos siempre es mejor", concluye el autor principal de la investigación, Bruce Bailey.
                ',
                'title' => '10.000 pasos al día: ¿es suficiente para prevenir el aumento de peso?',
                'picture' => 'articulo9.jpg',
                'tag1' => 'Sobrepeso',
                'tag2' => 'Estudio',
                'tag3' => 'Fitness',
                'userId' => rand(2,4),
            ],
            
             [
                'idArticle' => 10,
                'content' => 'Una nueva investigación a cargo del Centro de Ciencias del Peso, Alimentación y Estilo de Vida (WELL Center) en la Facultad de Artes y Ciencias de la Universidad de Drexel (Estados Unidos) pone de manifiesto que además de las importantes implicaciones que el ejercicio físico tiene para la salud, también ayuda a adherirse a una dieta baja en calorías.

Hasta la fecha ha existido, y existe, mucho debate en torno a incidencia de la actividad física sobre el apetito. Mientras que algunos estudios muestran que el ejercicio lleva a comer en exceso al aumentar el apetito o la justificación de una persona para comer, otros estudios muestran que el ejercicio regula el hambre y puede ayudar a reducir el comer en exceso.

Y es en este sentido en el que se posiciona el trabajo de la universidad norteamericana, que ha sido publicado en "Health Psychology". Los resultados del estudio, en el que han participado 130 personas, indican que el ejercicio físico es un factor que es más parte de la solución que del problema.

Reducción del apetito:

No en vano, ha evidenciado que el ejercicio reduce hasta un 12 por ciento la probabilidad de comer en exceso. Además, según se ha observado, por cada 10 minutos adicionales de ejercicio el riesgo de ejercicio se reduce en un uno por ciento en las horas posteriores a realizarlo.

"Nuestro estudio sugiere que el ejercicio también puede ayudar a adherirse a una dieta baja en calorías, tal vez a través de una mejor regulación del apetito o el comportamiento alimentario, por lo que es una razón más para hacer actividad física si se quiere bajar de peso", explica Rebecca Crochiere, principal autora de la investigación.

“Estos hallazgos pueden ayudar a los investigadores a comprender mejor cuándo las personas que buscan perder peso corren el riesgo de comer en exceso. Pueden sugerir también el desarrollo de tratamientos que eviten comer en exceso y faciliten la pérdida de peso", añade Crochiere.

Los resultados también insinuan que el efecto del ejercicio sobre el comportamiento alimentario puede depender de la intensidad del ejercicio, con una actividad física ligera (versus moderada a vigorosa) que muestra los efectos protectores más fuertes contra comer en exceso, aunque se necesita más investigación para respaldar este hallazgo según la principal investigadora.
                ',
                'title' => 'El ejercicio físico favorece la adherencia a una dieta baja en calorías',
                'picture' => 'articulo10.jpg',
                'tag1' => 'Dieta',
                'tag2' => 'Calorías',
                'tag3' => 'Saludable',
                'userId' => rand(2,4),
            ],
            
        ]);
    }
}
