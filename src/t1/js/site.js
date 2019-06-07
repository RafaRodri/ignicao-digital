/** const que referencia o display da calculadora */
const display = $(".calc-area");


/** Evento acionado quando o usuário insere diretamente no display da calculadora, por meio do teclado */
display.keydown(function (e) {
  let key = e.key;

  /** Avaliar qual tecla apertada, e definir o procedimento a seguir */
  switch (key) {
    /** Caso pressione um número */
    case '0':
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
    case '6':
    case '7':
    case '8':
    case '9':
    case 'numpad 0':
    case 'numpad 1':
    case 'numpad 2':
    case 'numpad 3':
    case 'numpad 4':
    case 'numpad 5':
    case 'numpad 6':
    case 'numpad 7':
    case 'numpad 8':
    case 'numpad 9':
      /** Chamar a função "value" */
      value(key);
      return false;

    /** Caso pressione um operador matemático */
    case '+':
    case '-':
    case '/':
    case '*':
      /** Chamar a função "operation" */
      operation(key);
      return false;

    /** Caso pressione a vírgula ou ponto */
    case ',':
    case '.':
      /** Se a expressão estiver terminando com um numeral, chamar a função "decimal" */
      if (getIfLastInt(display.val())) {
        decimal();
      }
      return false;

    /** Caso pressione a techa "enter" */
    case 'Enter':
      /** Chamar a função "calculate" que gera o resultado */
      calculate();
      break;

    /** Teclas permitidas para facilitar a experiência do usuário */
    case 'Backspace':
    case 'ArrowLeft':
    case 'ArrowRight':
    case 'Home':
    case 'End':
      break;

    /** Caso pressione qualquer outra tecla, o valor desta não será inserido na expressão */
    default:
      return false;
  }
});


/** Evento acionado quando se clica no botão "clear" da calculadora */
$(".clear").on("click", function () {
  display.val(0);
});

/** Evento acionado quando se clica no botão "backspace" da calculadora */
$(".backspace").on("click", function () {
  backspace();
});

/** Evento acionado quando se clica no botão "=" */
$(".calculate").on("click", function () {
  calculate();
});

/** Evento acionado quando se clica em algum numeral (0 a 9) */
$(".num button").on("click", function () {
  value($(this).val());
});

/** Evento acionado quando se clica em algum botão de operação ("+", "-", "*" e "/") */
$(".op button").on("click", function () {
  operation($(this).val());
});

/** Evento acionado quando se clica no botão "," para adicionar casas decimais */
$(".decimal").on("click", function () {
  decimal();
});


/** Função responsável por remover a cada click, o último caractere exibido no display da calculadora */
function backspace() {
  /** Armazenar expressão atual vista no display, na variável 'displayValue' */
  let displayValue = display.val();

  /** Se a calculadora estiver zerada, não há nada mais a remover */
  if (displayValue != 0) {
    displayValue = removeChar(displayValue, 1);
  }

  /** Retornar a nova expressão matemática ao display da calculadora. */
  if (!displayValue == '') {
    display.val(displayValue);
  }
  /** Caso o caractere removido neste click fosse o último da expressão, exibir o valor '0' no display da calculadora */
  else {
    display.val(0);
  }
}

/** Função responsável por inserir um novo número no display da calculadora */
function value(num) {
  /** Armazenar expressão atual vista no display, na variável 'displayValue' */
  let displayValue = display.val();

  /** Se a calculadora estiver zerada (e o último caractere não for um separador decimal),
   *  remover o '0', para que não exista um "zero a esquerda" */
  if (displayValue == 0 && !getIfLastIsComma(displayValue)) {
    display.val('');
  }
  /** Se a calculadora NÃO estiver zerada, concaternar o número informado à expressão já existente */
  else {
    num = displayValue + '' + num;
  }

  /** Retornar a nova expressão matemática ao display da calculadora. */
  display.val(num);
}

/** Função responsável por inserir um novo operador matemático no display da calculadora */
function operation(char) {
  /** Se a calculadora estiver zerada, ignorar o evento para adicionar um novo operador */
  if (display.val() != 0) {
    /** Armazenar expressão atual vista no display, na variável 'displayValue' */
    let displayValue = display.val();

    /** Caso o último caractere da expressão seja um outro operador, remove-lo antes,
     *  evitando que haja dois operadores em sequência */
    if (!getIfLastInt(display.val())) {
      displayValue = removeChar(displayValue, 1);
    }

    /** Retornar a nova expressão matemática ao display da calculadora. */
    display.val(displayValue + '' + char);
  }
}

/** Função responsável por inserir um separador para informar casas decimais */
function decimal() {
  /** Armazenar expressão atual vista no display, na variável 'displayValue' */
  let displayValue = display.val();

  /** Permitir a que o separador seja inserido apenas quando o último caractere da expressão for um númeral (0 a 9)
   *  evitando que haja duas vírgulas em sequência ou uma vírgula após um operador matemático */
  if (getIfLastInt(displayValue) && !getIfLastIsComma(displayValue)) {
    display.val(displayValue + '.');
  }
}

/** Função responsável por gerar o resultado do cálculo realizado pelo usuário */
function calculate() {
  /** Armazenar expressão atual vista no display, na variável 'displayValue' */
  let displayValue = display.val();

  /** Caso o último caractere da expressão seja um operador, remove-lo antes */
  if (!getIfLastInt(display.val())) {
    displayValue = removeChar(displayValue, 1);
  }

  /** Retornar o resultado da expressão matemática ao display da calculadora. */
  display.val(eval(displayValue));
}

/**
 * Remove o último caractere da expressão informada
 *
 * @param string {string}
 * @param length {int}
 * @returns {string}
 */
function removeChar(string, length) {
  return string.substring(0, string.length - length);
}

/**
 * Verifica se o último caractere da expressão informada é inteiro
 *
 * @param string {string}
 * @returns {boolean}
 */
function getIfLastInt(string) {
  let last = string.substr(-1, 1);

  return (!isNaN(parseInt(last)));
}

/**
 * Verifica se o último caractere da expressão informada é uma vírgula (,)
 *
 * @param string {string}
 * @returns {boolean}
 */
function getIfLastIsComma(string) {
  /** Armazenar posição do último separador decimal encontrado na expressão atual, vista no display */
  let posComma = string.lastIndexOf('.');
  let comma = true;

  /** Criar array com os caracteres a serem buscados na expressão */
  let elementIds = ['+', '-', '*', '/'];
  /** Chamar função que retorna um objeto, com a posição da última ocorrência de cada um dos caracteres informados */
  let elements = getElements(elementIds);

  /** Percorrer objeto */
  Object.keys(elements).forEach(function (e) {
    /** Se algum operador for encontrado após o último separador decimal, atribuir o valor false a variável que será retornada,
     *  o que indicará que não há riscos de incluir mais de um separador decimal no mesmo número */
    if (posComma <= elements[e]) {
      comma = false;
      return false
    }
  });

  return comma;
}

/**
 * Recebe um array com caracteres, e retorna um objeto com a posição da última ocorrência de cada um, na expressão atual vista no display da calculadora
 *
 * @param ids {array}
 * @returns {object}
 */
function getElements(ids) {
  /** Percorrer objeto, recebendo callback e elemento que será passado para o método de callback a cada passo do loop */
  return ids.reduce(function (accumulator, id) {
    /** Armazenar posição da última ocorrência do caractere em questão */
    accumulator[id] = display.val().lastIndexOf(id);
    /** Retornar tudo que foi acumulado durante o loop */
    return accumulator;
  }, {});
}
