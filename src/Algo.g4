/*
 * Copyright (C) 2016 Proximit
 *
 * @author Guillaume de Lestanville <guillaume.delestanville@proximit.fr>.
 * @since 30/09/2016.
 *
 * 
 */

grammar Algo;

@members {
  // Type des identificateurs	
  // enum ContextID
  const CTX_UNKNOWN_ID = 0;
  const CTX_ALGORITHME = 1;
  const CTX_VARIABLE = 2;
  const CTX_CONSTANTE = 3;
  const CTX_FONCTION = 4;
  const CTX_PROCEDURE = 5;
  const CTX_DATATYPE = 6;

  // enum KindType
  const TYP_QUELCONQUE = 0;
  const TYP_NUMERIQUE = 1;
  const TYP_TEXTE = 2;
  const TYP_TABLEAU = 3;
  const TYP_STRUCTURE = 4;
  const TYP_ENUMERATION = 5;
}


algorithme 
	: sepInstr? contexte_algorithme sepInstr? EOF
	;

/*
 * Définition des contextes de déclaration
 */
contexte_algorithme
	: ALGORITHME ID sepInstr bloc
	;

bloc
	: (sepInstr partie_declaration)* sepInstr bloc_instructions
	;
	  
partie_declaration
	: contexte_algorithme
	| contexte_fonction
	| contexte_procedure
	| contexte_type
	| contexte_variable
	| contexte_constante
	;

contexte_fonction
	: FONCTION ID '(' liste_parametres_formels ')' t=introduction_type? bloc
	;

contexte_procedure
	: PROCEDURE ID '(' liste_parametres_formels ')' bloc
	;

contexte_type
	: TYPEDEF (sepInstr declaration_typedef)+
	;

contexte_variable
	: VARIABLE (sepInstr declaration_variable)+
	;

contexte_constante
	: CONSTANTE (sepInstr declaration_constante)+
	;

declaration_variable
	: ID (',' ID)* t=introduction_type?
	;

declaration_typedef
	: ID '=' type_donnee
	;

declaration_constante
	: ID t=introduction_type? '=' expression
	;

liste_parametres_formels
	: declaration_variable (sepInstr declaration_variable)*
	;

/*
 * Définition de type
 */

introduction_type
	: ':' type_donnee
	;

type_donnee
	: type_simple
	| type_complexe
	| reference
	| access_ID[CTX_DATATYPE]
	;

type_simple
    : QUELCONQUE
	| ENTIER
	| BOOLEEN
	| DECIMAL
	| CHAINE
	;

type_complexe
	: definition_tableau
	| definition_structure
	| definition_classe
	;

reference
	: REFERENCE type_donnee
	;

definition_tableau
	: TABLEAU dimension_tableau? (DE type_donnee)?
	;

definition_structure
	: STRUCTURE SepInstr liste_champs_structures FIN STRUCTURE
	;


liste_champs_structures
	: (declaration_variable sepInstr)*
	;

// pour l'instant identique à une structure
// à préciser
definition_classe
	: CLASSE SepInstr liste_champs_structures FIN CLASSE
	;

dimension_tableau 
	: '[' IntegerT ']'
	| '[' IntegerT '..' IntegerT ']'
	;

/*
 * Définition des instructions
 */

// séparateur d'instruction
sepInstr
	: SepInstr+
	;

instruction
	: bloc_instructions
	| assigne
	| si_alors
	| boucle_tantque
	| boucle_pour
	| retourne
	| inclusion_fichier
	| appel_procedure
	;

liste_instructions
	: sepInstr (instruction sepInstr)*
	;

bloc_instructions
	: DEBUT liste_instructions FIN
	;

assigne
	: access_ID[CTX_VARIABLE]('[' index=expression ']')* AFFECTE exp=expression
	;

si_alors
	: SI test=expression ALORS truepart=liste_instructions (SINON falsepart=liste_instructions)? FIN SI
	;

boucle_tantque
	: TANTQUE expression FAIRE liste_instructions FIN TANTQUE
	;

boucle_pour
	: POUR access_ID[CTX_VARIABLE] DANS expression_liste (AVANCE expression)? FAIRE liste_instructions FIN POUR 
	;

retourne
	: RETOURNE expression
	;

inclusion_fichier
	: INCLURE StringT
	;

appel_procedure
	: access_ID[CTX_PROCEDURE] parametres?
	;

parametres
	: expression (',' expression)* 
	;

		
access_ID[ContextID rw]
	: ID ('.' ID )*
	;

/*
 * Définition d'une expression
 */
expression
	: access_ID[CTX_FONCTION] '(' parametres? ')'		# fonction
	| access_ID[CTX_VARIABLE] ('[' expression ']')*	# variable
//	| access_ID[CTX_CONSTANTE]						# appelConstante
	| '-' expression										# oppose
	| NOT expression										# negation
	| expression op1=('*' | '/') expression					# produit
	| expression op2=('+' | '-') expression					# somme
	| expression op3=opcomp expression						# comparaison
	| expression AND expression								# logique_et
	| expression OR expression								# logique_ou			
	| NumberT												# nombre
	| IntegerT												# entier
	| StringT												# texte
	| CharT													# caractere
	| (TRUE | FALSE)										# constante
	| '(' expression ')'									# groupe
	;

opcomp
	: GTH | LTH | GEQ | LEQ | DIFF | EQU
	;

expression_liste
	: '('  (expression (',' expression)*)? ')'
	| '[' expression '..' expression ']'
	| expression
	;

fragment A:('a'|'A');
fragment B:('b'|'B');
fragment C:('c'|'C');
fragment D:('d'|'D');
fragment E:('e'|'E');
fragment F:('f'|'F');
fragment G:('g'|'G');
fragment H:('h'|'H');
fragment I:('i'|'I');
fragment J:('j'|'J');
fragment K:('k'|'K');
fragment L:('l'|'L');
fragment M:('m'|'M');
fragment N:('n'|'N');
fragment O:('o'|'O');
fragment P:('p'|'P');
fragment Q:('q'|'Q');
fragment R:('r'|'R');
fragment S:('s'|'S');
fragment T:('t'|'T');
fragment U:('u'|'U');
fragment V:('v'|'V');
fragment W:('w'|'W');
fragment X:('x'|'X');
fragment Y:('y'|'Y');
fragment Z:('z'|'Z');
fragment E1: ('É'|'E'|'e'|'é');
fragment E2: ('È'|'E'|'e'|'è');
fragment I1: ('Î'|'I'|'i'|'î');

ALGORITHME : A L G O R I T H M E;
ALORS: A L O R S;
AND: E T;
AVANCE: A V A N C E;
BOOLEEN : B O O L (E1 E N)?;
CHAINE : C H A I1 N E;
CLASSE: C L A S S E;
CONSTANTE: C O N S T (A N T E)?;
DANS: D A N S;
DE: D E;
DEBUT: D E1 B U T;
DECIMAL: D E1 C I M A L;
ENTIER: E N T I E R;
FAIRE: F A I R E;
FALSE: F A U X;
FIN: F I N;
FONCTION: F O N C T I O N;
INCLURE: I N C L U R E;
JUSQUA: J U S Q U A;
MOD:  M O D U L O;
NOT: N O N;
OR: O  U;
POUR: P O U R;
PROCEDURE: P R O C (E1 D U R E)?;
QUELCONQUE: Q U E L C O N Q U E;
REFERENCE: R E1 F (E1 R E N C E)?;
REPETE: R E1 P E2 T E;
RETOURNE : R E T O U R N E;
SI: S I;
SINON: S I N O N;
STRUCTURE: S T R U C T U R E;
TABLEAU : T A B L E A U;
TANTQUE: T A N T Q U E;
TRUE: V R A I;
TYPEDEF: T Y P E D E F;
VARIABLE: V A R (I A B L E)?;

AFFECTE: '<-';
COLON : ':';
COMMA : ',';
LPAR: '(';
RPAR: ')';
LCROCH: '[';
RCROCH: ']';
DOT: '.';
DOTDOT: '..';
PLUS: '+';
MINUS: '-';
GTH: '>';
LTH: '<';
GEQ: '>=';
LEQ: '<=';
DIFF: '<>';
EQU: '=';
STAR: '*';
SLASH: '/';

ID : NameStartChar NameChar*
   ;

fragment
NameChar
   : NameStartChar
   | '0'..'9'
   | '_'
   | '\u00B7'
   | '\u0300'..'\u036F'
   | '\u203F'..'\u2040'
   ;
fragment
NameStartChar
   : 'A'..'Z' | 'a'..'z'
   | '\u00C0'..'\u00D6'
   | '\u00D8'..'\u00F6'
   | '\u00F8'..'\u02FF'
   | '\u0370'..'\u037D'
   | '\u037F'..'\u1FFF'
// Certains jeux de caractères ne sont pas supportés par PCRE
// Exemple le code \u{D801}
/*   | '\u200C'..'\u200D'
   | '\u2070'..'\u218F'
   | '\u2C00'..'\u2FEF'
   | '\u3001'..'\uD7FF'
   | '\uF900'..'\uFDCF'
   | '\uFDF0'..'\uFFFD' */
   ;

StringT : '"' (Escape | .)*? '"';

fragment Escape 
	: '\\' 
		( [bfnrt"\\0] 
		| 'x' HexDigit HexDigit 
		| 'u' HexDigit HexDigit HexDigit HexDigit
		)
	;


// un caractère entouré de '
CharT: '\'' (Escape | .) '\'' ;

// Nombre décimal simple
NumberT : DIGIT+ '.' DIGIT+ | '.' DIGIT+ ;

IntegerT : DIGIT+;

fragment
DIGIT : [0-9];

fragment 
HexDigit : DIGIT | [a-fA-F];

SepInstr
	: [\r\n;]
	;

WS
	:	([ \t]+ | ('_' [\r\n])+ ) -> skip
	;

SL_COMMENT
    :   '//' .*? '\n' -> skip
    ;
