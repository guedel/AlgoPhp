<?php

/*
 * Generated from src/Algo.g4 by ANTLR 4.9.2
 */

namespace Guedel\Algo\Base {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class AlgoParser extends Parser
	{
		public const ALGORITHME = 1, ALORS = 2, AND = 3, AVANCE = 4, BOOLEEN = 5, 
               CHAINE = 6, CLASSE = 7, CONSTANTE = 8, DANS = 9, DE = 10, 
               DEBUT = 11, DECIMAL = 12, ENTIER = 13, FAIRE = 14, FALSE = 15, 
               FIN = 16, FONCTION = 17, INCLURE = 18, JUSQUA = 19, MOD = 20, 
               NOT = 21, OR = 22, POUR = 23, PROCEDURE = 24, QUELCONQUE = 25, 
               REFERENCE = 26, REPETE = 27, RETOURNE = 28, SI = 29, SINON = 30, 
               STRUCTURE = 31, TABLEAU = 32, TANTQUE = 33, TRUE = 34, TYPEDEF = 35, 
               VARIABLE = 36, AFFECTE = 37, COLON = 38, COMMA = 39, LPAR = 40, 
               RPAR = 41, LCROCH = 42, RCROCH = 43, DOT = 44, DOTDOT = 45, 
               PLUS = 46, MINUS = 47, GTH = 48, LTH = 49, GEQ = 50, LEQ = 51, 
               DIFF = 52, EQU = 53, STAR = 54, SLASH = 55, ID = 56, StringT = 57, 
               CharT = 58, NumberT = 59, IntegerT = 60, SepInstr = 61, WS = 62, 
               SL_COMMENT = 63;

		public const RULE_algorithme = 0, RULE_contexte_algorithme = 1, RULE_bloc = 2, 
               RULE_partie_declaration = 3, RULE_contexte_fonction = 4, 
               RULE_contexte_procedure = 5, RULE_contexte_type = 6, RULE_contexte_variable = 7, 
               RULE_contexte_constante = 8, RULE_declaration_variable = 9, 
               RULE_declaration_typedef = 10, RULE_declaration_constante = 11, 
               RULE_liste_parametres_formels = 12, RULE_introduction_type = 13, 
               RULE_type_donnee = 14, RULE_type_simple = 15, RULE_type_complexe = 16, 
               RULE_reference = 17, RULE_definition_tableau = 18, RULE_definition_structure = 19, 
               RULE_liste_champs_structures = 20, RULE_definition_classe = 21, 
               RULE_dimension_tableau = 22, RULE_sepInstr = 23, RULE_instruction = 24, 
               RULE_liste_instructions = 25, RULE_bloc_instructions = 26, 
               RULE_assigne = 27, RULE_si_alors = 28, RULE_boucle_tantque = 29, 
               RULE_boucle_pour = 30, RULE_retourne = 31, RULE_inclusion_fichier = 32, 
               RULE_appel_procedure = 33, RULE_parametres = 34, RULE_access_ID = 35, 
               RULE_expression = 36, RULE_opcomp = 37, RULE_expression_liste = 38;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'algorithme', 'contexte_algorithme', 'bloc', 'partie_declaration', 'contexte_fonction', 
			'contexte_procedure', 'contexte_type', 'contexte_variable', 'contexte_constante', 
			'declaration_variable', 'declaration_typedef', 'declaration_constante', 
			'liste_parametres_formels', 'introduction_type', 'type_donnee', 'type_simple', 
			'type_complexe', 'reference', 'definition_tableau', 'definition_structure', 
			'liste_champs_structures', 'definition_classe', 'dimension_tableau', 
			'sepInstr', 'instruction', 'liste_instructions', 'bloc_instructions', 
			'assigne', 'si_alors', 'boucle_tantque', 'boucle_pour', 'retourne', 'inclusion_fichier', 
			'appel_procedure', 'parametres', 'access_ID', 'expression', 'opcomp', 
			'expression_liste'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, "'<-'", "':'", "','", "'('", "')'", "'['", 
		    "']'", "'.'", "'..'", "'+'", "'-'", "'>'", "'<'", "'>='", "'<='", 
		    "'<>'", "'='", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "ALGORITHME", "ALORS", "AND", "AVANCE", "BOOLEEN", "CHAINE", 
		    "CLASSE", "CONSTANTE", "DANS", "DE", "DEBUT", "DECIMAL", "ENTIER", 
		    "FAIRE", "FALSE", "FIN", "FONCTION", "INCLURE", "JUSQUA", "MOD", "NOT", 
		    "OR", "POUR", "PROCEDURE", "QUELCONQUE", "REFERENCE", "REPETE", "RETOURNE", 
		    "SI", "SINON", "STRUCTURE", "TABLEAU", "TANTQUE", "TRUE", "TYPEDEF", 
		    "VARIABLE", "AFFECTE", "COLON", "COMMA", "LPAR", "RPAR", "LCROCH", 
		    "RCROCH", "DOT", "DOTDOT", "PLUS", "MINUS", "GTH", "LTH", "GEQ", "LEQ", 
		    "DIFF", "EQU", "STAR", "SLASH", "ID", "StringT", "CharT", "NumberT", 
		    "IntegerT", "SepInstr", "WS", "SL_COMMENT"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{41}\u{1A2}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}\u{4}\u{1A}" .
		    "\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}\u{4}\u{1D}" .
		    "\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}\u{4}\u{20}" .
		    "\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}\u{4}\u{23}" .
		    "\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}\u{4}\u{26}" .
		    "\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{4}\u{28}\u{9}\u{28}\u{3}\u{2}" .
		    "\u{5}\u{2}\u{52}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}\u{5}\u{2}\u{56}\u{A}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{62}\u{A}\u{4}" .
		    "\u{C}\u{4}\u{E}\u{4}\u{65}\u{B}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{5}" .
		    "\u{5}\u{70}\u{A}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{6}\u{3}\u{6}\u{5}\u{6}\u{78}\u{A}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}" .
		    "\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{6}\u{8}\u{87}\u{A}\u{8}" .
		    "\u{D}\u{8}\u{E}\u{8}\u{88}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}" .
		    "\u{6}\u{9}\u{8F}\u{A}\u{9}\u{D}\u{9}\u{E}\u{9}\u{90}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{A}\u{3}\u{A}\u{6}\u{A}\u{97}\u{A}\u{A}\u{D}\u{A}\u{E}" .
		    "\u{A}\u{98}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{7}\u{B}\u{9E}\u{A}\u{B}" .
		    "\u{C}\u{B}\u{E}\u{B}\u{A1}\u{B}\u{B}\u{3}\u{B}\u{5}\u{B}\u{A4}\u{A}" .
		    "\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{D}\u{3}\u{D}" .
		    "\u{5}\u{D}\u{AC}\u{A}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}" .
		    "\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{7}\u{E}\u{B5}\u{A}\u{E}\u{C}\u{E}" .
		    "\u{E}\u{E}\u{B8}\u{B}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{C1}\u{A}\u{10}\u{3}" .
		    "\u{11}\u{3}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{5}\u{12}\u{C8}" .
		    "\u{A}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{14}\u{3}\u{14}" .
		    "\u{5}\u{14}\u{CF}\u{A}\u{14}\u{3}\u{14}\u{3}\u{14}\u{5}\u{14}\u{D3}" .
		    "\u{A}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}" .
		    "\u{3}\u{15}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{7}\u{16}\u{DE}\u{A}" .
		    "\u{16}\u{C}\u{16}\u{E}\u{16}\u{E1}\u{B}\u{16}\u{3}\u{17}\u{3}\u{17}" .
		    "\u{3}\u{17}\u{3}\u{17}\u{3}\u{17}\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}" .
		    "\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}" .
		    "\u{5}\u{18}\u{F1}\u{A}\u{18}\u{3}\u{19}\u{6}\u{19}\u{F4}\u{A}\u{19}" .
		    "\u{D}\u{19}\u{E}\u{19}\u{F5}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}" .
		    "\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{5}\u{1A}\u{100}" .
		    "\u{A}\u{1A}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{7}\u{1B}" .
		    "\u{106}\u{A}\u{1B}\u{C}\u{1B}\u{E}\u{1B}\u{109}\u{B}\u{1B}\u{3}\u{1C}" .
		    "\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}" .
		    "\u{3}\u{1D}\u{3}\u{1D}\u{7}\u{1D}\u{114}\u{A}\u{1D}\u{C}\u{1D}\u{E}" .
		    "\u{1D}\u{117}\u{B}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1E}" .
		    "\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{5}\u{1E}" .
		    "\u{122}\u{A}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}" .
		    "\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}" .
		    "\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{5}" .
		    "\u{20}\u{134}\u{A}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}" .
		    "\u{3}\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}\u{3}\u{22}\u{3}\u{22}" .
		    "\u{3}\u{22}\u{3}\u{23}\u{3}\u{23}\u{5}\u{23}\u{143}\u{A}\u{23}\u{3}" .
		    "\u{24}\u{3}\u{24}\u{3}\u{24}\u{7}\u{24}\u{148}\u{A}\u{24}\u{C}\u{24}" .
		    "\u{E}\u{24}\u{14B}\u{B}\u{24}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{7}" .
		    "\u{25}\u{150}\u{A}\u{25}\u{C}\u{25}\u{E}\u{25}\u{153}\u{B}\u{25}\u{3}" .
		    "\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{5}\u{26}\u{159}\u{A}\u{26}" .
		    "\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}" .
		    "\u{3}\u{26}\u{7}\u{26}\u{162}\u{A}\u{26}\u{C}\u{26}\u{E}\u{26}\u{165}" .
		    "\u{B}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}" .
		    "\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}" .
		    "\u{3}\u{26}\u{3}\u{26}\u{5}\u{26}\u{174}\u{A}\u{26}\u{3}\u{26}\u{3}" .
		    "\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}" .
		    "\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}" .
		    "\u{26}\u{3}\u{26}\u{3}\u{26}\u{7}\u{26}\u{186}\u{A}\u{26}\u{C}\u{26}" .
		    "\u{E}\u{26}\u{189}\u{B}\u{26}\u{3}\u{27}\u{3}\u{27}\u{3}\u{28}\u{3}" .
		    "\u{28}\u{3}\u{28}\u{3}\u{28}\u{7}\u{28}\u{191}\u{A}\u{28}\u{C}\u{28}" .
		    "\u{E}\u{28}\u{194}\u{B}\u{28}\u{5}\u{28}\u{196}\u{A}\u{28}\u{3}\u{28}" .
		    "\u{3}\u{28}\u{3}\u{28}\u{3}\u{28}\u{3}\u{28}\u{3}\u{28}\u{3}\u{28}" .
		    "\u{3}\u{28}\u{5}\u{28}\u{1A0}\u{A}\u{28}\u{3}\u{28}\u{2}\u{3}\u{4A}" .
		    "\u{29}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}" .
		    "\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}\u{2C}" .
		    "\u{2E}\u{30}\u{32}\u{34}\u{36}\u{38}\u{3A}\u{3C}\u{3E}\u{40}\u{42}" .
		    "\u{44}\u{46}\u{48}\u{4A}\u{4C}\u{4E}\u{2}\u{7}\u{5}\u{2}\u{7}\u{8}" .
		    "\u{E}\u{F}\u{1B}\u{1B}\u{4}\u{2}\u{11}\u{11}\u{24}\u{24}\u{3}\u{2}" .
		    "\u{38}\u{39}\u{3}\u{2}\u{30}\u{31}\u{3}\u{2}\u{32}\u{37}\u{2}\u{1B6}" .
		    "\u{2}\u{51}\u{3}\u{2}\u{2}\u{2}\u{4}\u{59}\u{3}\u{2}\u{2}\u{2}\u{6}" .
		    "\u{63}\u{3}\u{2}\u{2}\u{2}\u{8}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{A}\u{71}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{E}\u{82}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{10}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{12}\u{92}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{14}\u{9A}\u{3}\u{2}\u{2}\u{2}\u{16}\u{A5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{18}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{B0}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{1C}\u{B9}\u{3}\u{2}\u{2}\u{2}\u{1E}\u{C0}\u{3}\u{2}\u{2}\u{2}\u{20}" .
		    "\u{C2}\u{3}\u{2}\u{2}\u{2}\u{22}\u{C7}\u{3}\u{2}\u{2}\u{2}\u{24}\u{C9}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{26}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{28}\u{D4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2A}\u{DF}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{E2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2E}\u{F0}\u{3}\u{2}\u{2}\u{2}\u{30}\u{F3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{32}\u{FF}\u{3}\u{2}\u{2}\u{2}\u{34}\u{101}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{36}\u{10A}\u{3}\u{2}\u{2}\u{2}\u{38}\u{10E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3A}\u{11B}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{126}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3E}\u{12D}\u{3}\u{2}\u{2}\u{2}\u{40}\u{13A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{42}\u{13D}\u{3}\u{2}\u{2}\u{2}\u{44}\u{140}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{46}\u{144}\u{3}\u{2}\u{2}\u{2}\u{48}\u{14C}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4A}\u{173}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{18A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4E}\u{19F}\u{3}\u{2}\u{2}\u{2}\u{50}\u{52}\u{5}\u{30}\u{19}" .
		    "\u{2}\u{51}\u{50}\u{3}\u{2}\u{2}\u{2}\u{51}\u{52}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{52}\u{53}\u{3}\u{2}\u{2}\u{2}\u{53}\u{55}\u{5}\u{4}\u{3}\u{2}\u{54}" .
		    "\u{56}\u{5}\u{30}\u{19}\u{2}\u{55}\u{54}\u{3}\u{2}\u{2}\u{2}\u{55}" .
		    "\u{56}\u{3}\u{2}\u{2}\u{2}\u{56}\u{57}\u{3}\u{2}\u{2}\u{2}\u{57}\u{58}" .
		    "\u{7}\u{2}\u{2}\u{3}\u{58}\u{3}\u{3}\u{2}\u{2}\u{2}\u{59}\u{5A}\u{7}" .
		    "\u{3}\u{2}\u{2}\u{5A}\u{5B}\u{7}\u{3A}\u{2}\u{2}\u{5B}\u{5C}\u{5}" .
		    "\u{30}\u{19}\u{2}\u{5C}\u{5D}\u{5}\u{6}\u{4}\u{2}\u{5D}\u{5}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{5E}\u{5F}\u{5}\u{30}\u{19}\u{2}\u{5F}\u{60}\u{5}" .
		    "\u{8}\u{5}\u{2}\u{60}\u{62}\u{3}\u{2}\u{2}\u{2}\u{61}\u{5E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{62}\u{65}\u{3}\u{2}\u{2}\u{2}\u{63}\u{61}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{63}\u{64}\u{3}\u{2}\u{2}\u{2}\u{64}\u{66}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{65}\u{63}\u{3}\u{2}\u{2}\u{2}\u{66}\u{67}\u{5}\u{30}\u{19}\u{2}" .
		    "\u{67}\u{68}\u{5}\u{36}\u{1C}\u{2}\u{68}\u{7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{69}\u{70}\u{5}\u{4}\u{3}\u{2}\u{6A}\u{70}\u{5}\u{A}\u{6}\u{2}\u{6B}" .
		    "\u{70}\u{5}\u{C}\u{7}\u{2}\u{6C}\u{70}\u{5}\u{E}\u{8}\u{2}\u{6D}\u{70}" .
		    "\u{5}\u{10}\u{9}\u{2}\u{6E}\u{70}\u{5}\u{12}\u{A}\u{2}\u{6F}\u{69}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{6F}\u{6A}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{6B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6F}\u{6C}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{6D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{6F}\u{6E}\u{3}\u{2}\u{2}\u{2}\u{70}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{71}\u{72}\u{7}\u{13}\u{2}\u{2}\u{72}\u{73}\u{7}\u{3A}\u{2}" .
		    "\u{2}\u{73}\u{74}\u{7}\u{2A}\u{2}\u{2}\u{74}\u{75}\u{5}\u{1A}\u{E}" .
		    "\u{2}\u{75}\u{77}\u{7}\u{2B}\u{2}\u{2}\u{76}\u{78}\u{5}\u{1C}\u{F}" .
		    "\u{2}\u{77}\u{76}\u{3}\u{2}\u{2}\u{2}\u{77}\u{78}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{78}\u{79}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7A}\u{5}\u{6}\u{4}\u{2}\u{7A}" .
		    "\u{B}\u{3}\u{2}\u{2}\u{2}\u{7B}\u{7C}\u{7}\u{1A}\u{2}\u{2}\u{7C}\u{7D}" .
		    "\u{7}\u{3A}\u{2}\u{2}\u{7D}\u{7E}\u{7}\u{2A}\u{2}\u{2}\u{7E}\u{7F}" .
		    "\u{5}\u{1A}\u{E}\u{2}\u{7F}\u{80}\u{7}\u{2B}\u{2}\u{2}\u{80}\u{81}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{81}\u{D}\u{3}\u{2}\u{2}\u{2}\u{82}\u{86}\u{7}" .
		    "\u{25}\u{2}\u{2}\u{83}\u{84}\u{5}\u{30}\u{19}\u{2}\u{84}\u{85}\u{5}" .
		    "\u{16}\u{C}\u{2}\u{85}\u{87}\u{3}\u{2}\u{2}\u{2}\u{86}\u{83}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{87}\u{88}\u{3}\u{2}\u{2}\u{2}\u{88}\u{86}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{88}\u{89}\u{3}\u{2}\u{2}\u{2}\u{89}\u{F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8A}\u{8E}\u{7}\u{26}\u{2}\u{2}\u{8B}\u{8C}\u{5}\u{30}\u{19}" .
		    "\u{2}\u{8C}\u{8D}\u{5}\u{14}\u{B}\u{2}\u{8D}\u{8F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8E}\u{8B}\u{3}\u{2}\u{2}\u{2}\u{8F}\u{90}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{90}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{90}\u{91}\u{3}\u{2}\u{2}\u{2}\u{91}" .
		    "\u{11}\u{3}\u{2}\u{2}\u{2}\u{92}\u{96}\u{7}\u{A}\u{2}\u{2}\u{93}\u{94}" .
		    "\u{5}\u{30}\u{19}\u{2}\u{94}\u{95}\u{5}\u{18}\u{D}\u{2}\u{95}\u{97}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{96}\u{93}\u{3}\u{2}\u{2}\u{2}\u{97}\u{98}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{98}\u{96}\u{3}\u{2}\u{2}\u{2}\u{98}\u{99}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{99}\u{13}\u{3}\u{2}\u{2}\u{2}\u{9A}\u{9F}\u{7}\u{3A}" .
		    "\u{2}\u{2}\u{9B}\u{9C}\u{7}\u{29}\u{2}\u{2}\u{9C}\u{9E}\u{7}\u{3A}" .
		    "\u{2}\u{2}\u{9D}\u{9B}\u{3}\u{2}\u{2}\u{2}\u{9E}\u{A1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{9F}\u{9D}\u{3}\u{2}\u{2}\u{2}\u{9F}\u{A0}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{A0}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{9F}\u{3}\u{2}\u{2}\u{2}\u{A2}" .
		    "\u{A4}\u{5}\u{1C}\u{F}\u{2}\u{A3}\u{A2}\u{3}\u{2}\u{2}\u{2}\u{A3}" .
		    "\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{15}\u{3}\u{2}\u{2}\u{2}\u{A5}\u{A6}" .
		    "\u{7}\u{3A}\u{2}\u{2}\u{A6}\u{A7}\u{7}\u{37}\u{2}\u{2}\u{A7}\u{A8}" .
		    "\u{5}\u{1E}\u{10}\u{2}\u{A8}\u{17}\u{3}\u{2}\u{2}\u{2}\u{A9}\u{AB}" .
		    "\u{7}\u{3A}\u{2}\u{2}\u{AA}\u{AC}\u{5}\u{1C}\u{F}\u{2}\u{AB}\u{AA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{AB}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AD}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{AD}\u{AE}\u{7}\u{37}\u{2}\u{2}\u{AE}\u{AF}\u{5}" .
		    "\u{4A}\u{26}\u{2}\u{AF}\u{19}\u{3}\u{2}\u{2}\u{2}\u{B0}\u{B6}\u{5}" .
		    "\u{14}\u{B}\u{2}\u{B1}\u{B2}\u{5}\u{30}\u{19}\u{2}\u{B2}\u{B3}\u{5}" .
		    "\u{14}\u{B}\u{2}\u{B3}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B4}\u{B1}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{B5}\u{B8}\u{3}\u{2}\u{2}\u{2}\u{B6}\u{B4}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B6}\u{B7}\u{3}\u{2}\u{2}\u{2}\u{B7}\u{1B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B8}\u{B6}\u{3}\u{2}\u{2}\u{2}\u{B9}\u{BA}\u{7}\u{28}\u{2}" .
		    "\u{2}\u{BA}\u{BB}\u{5}\u{1E}\u{10}\u{2}\u{BB}\u{1D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{BC}\u{C1}\u{5}\u{20}\u{11}\u{2}\u{BD}\u{C1}\u{5}\u{22}\u{12}" .
		    "\u{2}\u{BE}\u{C1}\u{5}\u{24}\u{13}\u{2}\u{BF}\u{C1}\u{5}\u{48}\u{25}" .
		    "\u{2}\u{C0}\u{BC}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{BD}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C0}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{C1}" .
		    "\u{1F}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{C3}\u{9}\u{2}\u{2}\u{2}\u{C3}\u{21}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C4}\u{C8}\u{5}\u{26}\u{14}\u{2}\u{C5}\u{C8}" .
		    "\u{5}\u{28}\u{15}\u{2}\u{C6}\u{C8}\u{5}\u{2C}\u{17}\u{2}\u{C7}\u{C4}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C7}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{C7}\u{C6}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{C8}\u{23}\u{3}\u{2}\u{2}\u{2}\u{C9}\u{CA}\u{7}\u{1C}" .
		    "\u{2}\u{2}\u{CA}\u{CB}\u{5}\u{1E}\u{10}\u{2}\u{CB}\u{25}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{CC}\u{CE}\u{7}\u{22}\u{2}\u{2}\u{CD}\u{CF}\u{5}\u{2E}" .
		    "\u{18}\u{2}\u{CE}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{CE}\u{CF}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{CF}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{D1}\u{7}\u{C}\u{2}" .
		    "\u{2}\u{D1}\u{D3}\u{5}\u{1E}\u{10}\u{2}\u{D2}\u{D0}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D2}\u{D3}\u{3}\u{2}\u{2}\u{2}\u{D3}\u{27}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D4}\u{D5}\u{7}\u{21}\u{2}\u{2}\u{D5}\u{D6}\u{7}\u{3F}\u{2}\u{2}" .
		    "\u{D6}\u{D7}\u{5}\u{2A}\u{16}\u{2}\u{D7}\u{D8}\u{7}\u{12}\u{2}\u{2}" .
		    "\u{D8}\u{D9}\u{7}\u{21}\u{2}\u{2}\u{D9}\u{29}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{DA}\u{DB}\u{5}\u{14}\u{B}\u{2}\u{DB}\u{DC}\u{5}\u{30}\u{19}\u{2}" .
		    "\u{DC}\u{DE}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{DA}\u{3}\u{2}\u{2}\u{2}\u{DE}" .
		    "\u{E1}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{DD}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{E0}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{E0}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{E1}\u{DF}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{E2}\u{E3}\u{7}\u{9}\u{2}\u{2}\u{E3}\u{E4}\u{7}\u{3F}" .
		    "\u{2}\u{2}\u{E4}\u{E5}\u{5}\u{2A}\u{16}\u{2}\u{E5}\u{E6}\u{7}\u{12}" .
		    "\u{2}\u{2}\u{E6}\u{E7}\u{7}\u{9}\u{2}\u{2}\u{E7}\u{2D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E8}\u{E9}\u{7}\u{2C}\u{2}\u{2}\u{E9}\u{EA}\u{7}\u{3E}\u{2}" .
		    "\u{2}\u{EA}\u{F1}\u{7}\u{2D}\u{2}\u{2}\u{EB}\u{EC}\u{7}\u{2C}\u{2}" .
		    "\u{2}\u{EC}\u{ED}\u{7}\u{3E}\u{2}\u{2}\u{ED}\u{EE}\u{7}\u{2F}\u{2}" .
		    "\u{2}\u{EE}\u{EF}\u{7}\u{3E}\u{2}\u{2}\u{EF}\u{F1}\u{7}\u{2D}\u{2}" .
		    "\u{2}\u{F0}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{EB}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{F1}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{F2}\u{F4}\u{7}\u{3F}\u{2}\u{2}" .
		    "\u{F3}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{F5}\u{3}\u{2}\u{2}\u{2}\u{F5}" .
		    "\u{F3}\u{3}\u{2}\u{2}\u{2}\u{F5}\u{F6}\u{3}\u{2}\u{2}\u{2}\u{F6}\u{31}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F7}\u{100}\u{5}\u{36}\u{1C}\u{2}\u{F8}\u{100}" .
		    "\u{5}\u{38}\u{1D}\u{2}\u{F9}\u{100}\u{5}\u{3A}\u{1E}\u{2}\u{FA}\u{100}" .
		    "\u{5}\u{3C}\u{1F}\u{2}\u{FB}\u{100}\u{5}\u{3E}\u{20}\u{2}\u{FC}\u{100}" .
		    "\u{5}\u{40}\u{21}\u{2}\u{FD}\u{100}\u{5}\u{42}\u{22}\u{2}\u{FE}\u{100}" .
		    "\u{5}\u{44}\u{23}\u{2}\u{FF}\u{F7}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{F8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{FF}\u{F9}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{FA}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{FF}\u{FB}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{FC}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{FF}\u{FD}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{FE}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{100}\u{33}\u{3}\u{2}\u{2}\u{2}\u{101}\u{107}\u{5}\u{30}\u{19}" .
		    "\u{2}\u{102}\u{103}\u{5}\u{32}\u{1A}\u{2}\u{103}\u{104}\u{5}\u{30}" .
		    "\u{19}\u{2}\u{104}\u{106}\u{3}\u{2}\u{2}\u{2}\u{105}\u{102}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{106}\u{109}\u{3}\u{2}\u{2}\u{2}\u{107}\u{105}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{107}\u{108}\u{3}\u{2}\u{2}\u{2}\u{108}\u{35}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{109}\u{107}\u{3}\u{2}\u{2}\u{2}\u{10A}\u{10B}\u{7}\u{D}" .
		    "\u{2}\u{2}\u{10B}\u{10C}\u{5}\u{34}\u{1B}\u{2}\u{10C}\u{10D}\u{7}" .
		    "\u{12}\u{2}\u{2}\u{10D}\u{37}\u{3}\u{2}\u{2}\u{2}\u{10E}\u{115}\u{5}" .
		    "\u{48}\u{25}\u{2}\u{10F}\u{110}\u{7}\u{2C}\u{2}\u{2}\u{110}\u{111}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{111}\u{112}\u{7}\u{2D}\u{2}\u{2}\u{112}\u{114}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{113}\u{10F}\u{3}\u{2}\u{2}\u{2}\u{114}\u{117}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{115}\u{113}\u{3}\u{2}\u{2}\u{2}\u{115}\u{116}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{116}\u{118}\u{3}\u{2}\u{2}\u{2}\u{117}\u{115}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{118}\u{119}\u{7}\u{27}\u{2}\u{2}\u{119}\u{11A}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{11A}\u{39}\u{3}\u{2}\u{2}\u{2}\u{11B}\u{11C}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{11C}\u{11D}\u{5}\u{4A}\u{26}\u{2}\u{11D}\u{11E}" .
		    "\u{7}\u{4}\u{2}\u{2}\u{11E}\u{121}\u{5}\u{34}\u{1B}\u{2}\u{11F}\u{120}" .
		    "\u{7}\u{20}\u{2}\u{2}\u{120}\u{122}\u{5}\u{34}\u{1B}\u{2}\u{121}\u{11F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{121}\u{122}\u{3}\u{2}\u{2}\u{2}\u{122}\u{123}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{123}\u{124}\u{7}\u{12}\u{2}\u{2}\u{124}\u{125}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{125}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{126}\u{127}" .
		    "\u{7}\u{23}\u{2}\u{2}\u{127}\u{128}\u{5}\u{4A}\u{26}\u{2}\u{128}\u{129}" .
		    "\u{7}\u{10}\u{2}\u{2}\u{129}\u{12A}\u{5}\u{34}\u{1B}\u{2}\u{12A}\u{12B}" .
		    "\u{7}\u{12}\u{2}\u{2}\u{12B}\u{12C}\u{7}\u{23}\u{2}\u{2}\u{12C}\u{3D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12D}\u{12E}\u{7}\u{19}\u{2}\u{2}\u{12E}\u{12F}" .
		    "\u{5}\u{48}\u{25}\u{2}\u{12F}\u{130}\u{7}\u{B}\u{2}\u{2}\u{130}\u{133}" .
		    "\u{5}\u{4E}\u{28}\u{2}\u{131}\u{132}\u{7}\u{6}\u{2}\u{2}\u{132}\u{134}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{133}\u{131}\u{3}\u{2}\u{2}\u{2}\u{133}\u{134}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{134}\u{135}\u{3}\u{2}\u{2}\u{2}\u{135}\u{136}" .
		    "\u{7}\u{10}\u{2}\u{2}\u{136}\u{137}\u{5}\u{34}\u{1B}\u{2}\u{137}\u{138}" .
		    "\u{7}\u{12}\u{2}\u{2}\u{138}\u{139}\u{7}\u{19}\u{2}\u{2}\u{139}\u{3F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13A}\u{13B}\u{7}\u{1E}\u{2}\u{2}\u{13B}\u{13C}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{13C}\u{41}\u{3}\u{2}\u{2}\u{2}\u{13D}\u{13E}" .
		    "\u{7}\u{14}\u{2}\u{2}\u{13E}\u{13F}\u{7}\u{3B}\u{2}\u{2}\u{13F}\u{43}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{140}\u{142}\u{5}\u{48}\u{25}\u{2}\u{141}\u{143}" .
		    "\u{5}\u{46}\u{24}\u{2}\u{142}\u{141}\u{3}\u{2}\u{2}\u{2}\u{142}\u{143}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{143}\u{45}\u{3}\u{2}\u{2}\u{2}\u{144}\u{149}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{145}\u{146}\u{7}\u{29}\u{2}\u{2}\u{146}\u{148}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{147}\u{145}\u{3}\u{2}\u{2}\u{2}\u{148}\u{14B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{149}\u{147}\u{3}\u{2}\u{2}\u{2}\u{149}\u{14A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14A}\u{47}\u{3}\u{2}\u{2}\u{2}\u{14B}\u{149}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14C}\u{151}\u{7}\u{3A}\u{2}\u{2}\u{14D}\u{14E}" .
		    "\u{7}\u{2E}\u{2}\u{2}\u{14E}\u{150}\u{7}\u{3A}\u{2}\u{2}\u{14F}\u{14D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{150}\u{153}\u{3}\u{2}\u{2}\u{2}\u{151}\u{14F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{151}\u{152}\u{3}\u{2}\u{2}\u{2}\u{152}\u{49}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{153}\u{151}\u{3}\u{2}\u{2}\u{2}\u{154}\u{155}" .
		    "\u{8}\u{26}\u{1}\u{2}\u{155}\u{156}\u{5}\u{48}\u{25}\u{2}\u{156}\u{158}" .
		    "\u{7}\u{2A}\u{2}\u{2}\u{157}\u{159}\u{5}\u{46}\u{24}\u{2}\u{158}\u{157}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{158}\u{159}\u{3}\u{2}\u{2}\u{2}\u{159}\u{15A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15A}\u{15B}\u{7}\u{2B}\u{2}\u{2}\u{15B}\u{174}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15C}\u{163}\u{5}\u{48}\u{25}\u{2}\u{15D}\u{15E}" .
		    "\u{7}\u{2C}\u{2}\u{2}\u{15E}\u{15F}\u{5}\u{4A}\u{26}\u{2}\u{15F}\u{160}" .
		    "\u{7}\u{2D}\u{2}\u{2}\u{160}\u{162}\u{3}\u{2}\u{2}\u{2}\u{161}\u{15D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{162}\u{165}\u{3}\u{2}\u{2}\u{2}\u{163}\u{161}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{163}\u{164}\u{3}\u{2}\u{2}\u{2}\u{164}\u{174}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{165}\u{163}\u{3}\u{2}\u{2}\u{2}\u{166}\u{167}" .
		    "\u{7}\u{31}\u{2}\u{2}\u{167}\u{174}\u{5}\u{4A}\u{26}\u{F}\u{168}\u{169}" .
		    "\u{7}\u{17}\u{2}\u{2}\u{169}\u{174}\u{5}\u{4A}\u{26}\u{E}\u{16A}\u{174}" .
		    "\u{7}\u{3D}\u{2}\u{2}\u{16B}\u{174}\u{7}\u{3E}\u{2}\u{2}\u{16C}\u{174}" .
		    "\u{7}\u{3B}\u{2}\u{2}\u{16D}\u{174}\u{7}\u{3C}\u{2}\u{2}\u{16E}\u{174}" .
		    "\u{9}\u{3}\u{2}\u{2}\u{16F}\u{170}\u{7}\u{2A}\u{2}\u{2}\u{170}\u{171}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{171}\u{172}\u{7}\u{2B}\u{2}\u{2}\u{172}\u{174}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{154}\u{3}\u{2}\u{2}\u{2}\u{173}\u{15C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{166}\u{3}\u{2}\u{2}\u{2}\u{173}\u{168}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{16A}\u{3}\u{2}\u{2}\u{2}\u{173}\u{16B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{16C}\u{3}\u{2}\u{2}\u{2}\u{173}\u{16D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{173}\u{16E}\u{3}\u{2}\u{2}\u{2}\u{173}\u{16F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{174}\u{187}\u{3}\u{2}\u{2}\u{2}\u{175}\u{176}" .
		    "\u{C}\u{D}\u{2}\u{2}\u{176}\u{177}\u{9}\u{4}\u{2}\u{2}\u{177}\u{186}" .
		    "\u{5}\u{4A}\u{26}\u{E}\u{178}\u{179}\u{C}\u{C}\u{2}\u{2}\u{179}\u{17A}" .
		    "\u{9}\u{5}\u{2}\u{2}\u{17A}\u{186}\u{5}\u{4A}\u{26}\u{D}\u{17B}\u{17C}" .
		    "\u{C}\u{B}\u{2}\u{2}\u{17C}\u{17D}\u{5}\u{4C}\u{27}\u{2}\u{17D}\u{17E}" .
		    "\u{5}\u{4A}\u{26}\u{C}\u{17E}\u{186}\u{3}\u{2}\u{2}\u{2}\u{17F}\u{180}" .
		    "\u{C}\u{A}\u{2}\u{2}\u{180}\u{181}\u{7}\u{5}\u{2}\u{2}\u{181}\u{186}" .
		    "\u{5}\u{4A}\u{26}\u{B}\u{182}\u{183}\u{C}\u{9}\u{2}\u{2}\u{183}\u{184}" .
		    "\u{7}\u{18}\u{2}\u{2}\u{184}\u{186}\u{5}\u{4A}\u{26}\u{A}\u{185}\u{175}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{185}\u{178}\u{3}\u{2}\u{2}\u{2}\u{185}\u{17B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{185}\u{17F}\u{3}\u{2}\u{2}\u{2}\u{185}\u{182}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{186}\u{189}\u{3}\u{2}\u{2}\u{2}\u{187}\u{185}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{187}\u{188}\u{3}\u{2}\u{2}\u{2}\u{188}\u{4B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{189}\u{187}\u{3}\u{2}\u{2}\u{2}\u{18A}\u{18B}" .
		    "\u{9}\u{6}\u{2}\u{2}\u{18B}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{18C}\u{195}" .
		    "\u{7}\u{2A}\u{2}\u{2}\u{18D}\u{192}\u{5}\u{4A}\u{26}\u{2}\u{18E}\u{18F}" .
		    "\u{7}\u{29}\u{2}\u{2}\u{18F}\u{191}\u{5}\u{4A}\u{26}\u{2}\u{190}\u{18E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{191}\u{194}\u{3}\u{2}\u{2}\u{2}\u{192}\u{190}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{192}\u{193}\u{3}\u{2}\u{2}\u{2}\u{193}\u{196}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{194}\u{192}\u{3}\u{2}\u{2}\u{2}\u{195}\u{18D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{195}\u{196}\u{3}\u{2}\u{2}\u{2}\u{196}\u{197}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{197}\u{1A0}\u{7}\u{2B}\u{2}\u{2}\u{198}\u{199}" .
		    "\u{7}\u{2C}\u{2}\u{2}\u{199}\u{19A}\u{5}\u{4A}\u{26}\u{2}\u{19A}\u{19B}" .
		    "\u{7}\u{2F}\u{2}\u{2}\u{19B}\u{19C}\u{5}\u{4A}\u{26}\u{2}\u{19C}\u{19D}" .
		    "\u{7}\u{2D}\u{2}\u{2}\u{19D}\u{1A0}\u{3}\u{2}\u{2}\u{2}\u{19E}\u{1A0}" .
		    "\u{5}\u{4A}\u{26}\u{2}\u{19F}\u{18C}\u{3}\u{2}\u{2}\u{2}\u{19F}\u{198}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{19F}\u{19E}\u{3}\u{2}\u{2}\u{2}\u{1A0}\u{4F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{25}\u{51}\u{55}\u{63}\u{6F}\u{77}\u{88}\u{90}" .
		    "\u{98}\u{9F}\u{A3}\u{AB}\u{B6}\u{C0}\u{C7}\u{CE}\u{D2}\u{DF}\u{F0}" .
		    "\u{F5}\u{FF}\u{107}\u{115}\u{121}\u{133}\u{142}\u{149}\u{151}\u{158}" .
		    "\u{163}\u{173}\u{185}\u{187}\u{192}\u{195}\u{19F}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;


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



		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "Algo.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function algorithme() : Context\AlgorithmeContext
		{
		    $localContext = new Context\AlgorithmeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_algorithme);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(79);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SepInstr) {
		        	$this->setState(78);
		        	$this->sepInstr();
		        }
		        $this->setState(81);
		        $this->contexte_algorithme();
		        $this->setState(83);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SepInstr) {
		        	$this->setState(82);
		        	$this->sepInstr();
		        }
		        $this->setState(85);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_algorithme() : Context\Contexte_algorithmeContext
		{
		    $localContext = new Context\Contexte_algorithmeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_contexte_algorithme);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(87);
		        $this->match(self::ALGORITHME);
		        $this->setState(88);
		        $this->match(self::ID);
		        $this->setState(89);
		        $this->sepInstr();
		        $this->setState(90);
		        $this->bloc();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloc() : Context\BlocContext
		{
		    $localContext = new Context\BlocContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_bloc);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(97);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(92);
		        		$this->sepInstr();
		        		$this->setState(93);
		        		$this->partie_declaration(); 
		        	}

		        	$this->setState(99);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
		        }
		        $this->setState(100);
		        $this->sepInstr();
		        $this->setState(101);
		        $this->bloc_instructions();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function partie_declaration() : Context\Partie_declarationContext
		{
		    $localContext = new Context\Partie_declarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_partie_declaration);

		    try {
		        $this->setState(109);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ALGORITHME:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(103);
		            	$this->contexte_algorithme();
		            	break;

		            case self::FONCTION:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(104);
		            	$this->contexte_fonction();
		            	break;

		            case self::PROCEDURE:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(105);
		            	$this->contexte_procedure();
		            	break;

		            case self::TYPEDEF:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(106);
		            	$this->contexte_type();
		            	break;

		            case self::VARIABLE:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(107);
		            	$this->contexte_variable();
		            	break;

		            case self::CONSTANTE:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(108);
		            	$this->contexte_constante();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_fonction() : Context\Contexte_fonctionContext
		{
		    $localContext = new Context\Contexte_fonctionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_contexte_fonction);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(111);
		        $this->match(self::FONCTION);
		        $this->setState(112);
		        $this->match(self::ID);
		        $this->setState(113);
		        $this->match(self::LPAR);
		        $this->setState(114);
		        $this->liste_parametres_formels();
		        $this->setState(115);
		        $this->match(self::RPAR);
		        $this->setState(117);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(116);
		        	$localContext->t = $this->introduction_type();
		        }
		        $this->setState(119);
		        $this->bloc();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_procedure() : Context\Contexte_procedureContext
		{
		    $localContext = new Context\Contexte_procedureContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_contexte_procedure);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(121);
		        $this->match(self::PROCEDURE);
		        $this->setState(122);
		        $this->match(self::ID);
		        $this->setState(123);
		        $this->match(self::LPAR);
		        $this->setState(124);
		        $this->liste_parametres_formels();
		        $this->setState(125);
		        $this->match(self::RPAR);
		        $this->setState(126);
		        $this->bloc();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_type() : Context\Contexte_typeContext
		{
		    $localContext = new Context\Contexte_typeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_contexte_type);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(128);
		        $this->match(self::TYPEDEF);
		        $this->setState(132); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(129);
		        		$this->sepInstr();
		        		$this->setState(130);
		        		$this->declaration_typedef();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(134); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_variable() : Context\Contexte_variableContext
		{
		    $localContext = new Context\Contexte_variableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_contexte_variable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(136);
		        $this->match(self::VARIABLE);
		        $this->setState(140); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(137);
		        		$this->sepInstr();
		        		$this->setState(138);
		        		$this->declaration_variable();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(142); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function contexte_constante() : Context\Contexte_constanteContext
		{
		    $localContext = new Context\Contexte_constanteContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_contexte_constante);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(144);
		        $this->match(self::CONSTANTE);
		        $this->setState(148); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(145);
		        		$this->sepInstr();
		        		$this->setState(146);
		        		$this->declaration_constante();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(150); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration_variable() : Context\Declaration_variableContext
		{
		    $localContext = new Context\Declaration_variableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_declaration_variable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->match(self::ID);
		        $this->setState(157);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(153);
		        	$this->match(self::COMMA);
		        	$this->setState(154);
		        	$this->match(self::ID);
		        	$this->setState(159);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(161);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(160);
		        	$localContext->t = $this->introduction_type();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration_typedef() : Context\Declaration_typedefContext
		{
		    $localContext = new Context\Declaration_typedefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_declaration_typedef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(163);
		        $this->match(self::ID);
		        $this->setState(164);
		        $this->match(self::EQU);
		        $this->setState(165);
		        $this->type_donnee();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration_constante() : Context\Declaration_constanteContext
		{
		    $localContext = new Context\Declaration_constanteContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_declaration_constante);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(167);
		        $this->match(self::ID);
		        $this->setState(169);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(168);
		        	$localContext->t = $this->introduction_type();
		        }
		        $this->setState(171);
		        $this->match(self::EQU);
		        $this->setState(172);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function liste_parametres_formels() : Context\Liste_parametres_formelsContext
		{
		    $localContext = new Context\Liste_parametres_formelsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_liste_parametres_formels);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(174);
		        $this->declaration_variable();
		        $this->setState(180);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::SepInstr) {
		        	$this->setState(175);
		        	$this->sepInstr();
		        	$this->setState(176);
		        	$this->declaration_variable();
		        	$this->setState(182);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function introduction_type() : Context\Introduction_typeContext
		{
		    $localContext = new Context\Introduction_typeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_introduction_type);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(183);
		        $this->match(self::COLON);
		        $this->setState(184);
		        $this->type_donnee();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type_donnee() : Context\Type_donneeContext
		{
		    $localContext = new Context\Type_donneeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_type_donnee);

		    try {
		        $this->setState(190);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::BOOLEEN:
		            case self::CHAINE:
		            case self::DECIMAL:
		            case self::ENTIER:
		            case self::QUELCONQUE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(186);
		            	$this->type_simple();
		            	break;

		            case self::CLASSE:
		            case self::STRUCTURE:
		            case self::TABLEAU:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(187);
		            	$this->type_complexe();
		            	break;

		            case self::REFERENCE:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(188);
		            	$this->reference();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(189);
		            	$this->access_ID(CTX_DATATYPE);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type_simple() : Context\Type_simpleContext
		{
		    $localContext = new Context\Type_simpleContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_type_simple);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(192);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BOOLEEN) | (1 << self::CHAINE) | (1 << self::DECIMAL) | (1 << self::ENTIER) | (1 << self::QUELCONQUE))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type_complexe() : Context\Type_complexeContext
		{
		    $localContext = new Context\Type_complexeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_type_complexe);

		    try {
		        $this->setState(197);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TABLEAU:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(194);
		            	$this->definition_tableau();
		            	break;

		            case self::STRUCTURE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(195);
		            	$this->definition_structure();
		            	break;

		            case self::CLASSE:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(196);
		            	$this->definition_classe();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function reference() : Context\ReferenceContext
		{
		    $localContext = new Context\ReferenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_reference);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(199);
		        $this->match(self::REFERENCE);
		        $this->setState(200);
		        $this->type_donnee();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function definition_tableau() : Context\Definition_tableauContext
		{
		    $localContext = new Context\Definition_tableauContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_definition_tableau);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(202);
		        $this->match(self::TABLEAU);
		        $this->setState(204);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::LCROCH) {
		        	$this->setState(203);
		        	$this->dimension_tableau();
		        }
		        $this->setState(208);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DE) {
		        	$this->setState(206);
		        	$this->match(self::DE);
		        	$this->setState(207);
		        	$this->type_donnee();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function definition_structure() : Context\Definition_structureContext
		{
		    $localContext = new Context\Definition_structureContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_definition_structure);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(210);
		        $this->match(self::STRUCTURE);
		        $this->setState(211);
		        $this->match(self::SepInstr);
		        $this->setState(212);
		        $this->liste_champs_structures();
		        $this->setState(213);
		        $this->match(self::FIN);
		        $this->setState(214);
		        $this->match(self::STRUCTURE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function liste_champs_structures() : Context\Liste_champs_structuresContext
		{
		    $localContext = new Context\Liste_champs_structuresContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_liste_champs_structures);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(221);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::ID) {
		        	$this->setState(216);
		        	$this->declaration_variable();
		        	$this->setState(217);
		        	$this->sepInstr();
		        	$this->setState(223);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function definition_classe() : Context\Definition_classeContext
		{
		    $localContext = new Context\Definition_classeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_definition_classe);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(224);
		        $this->match(self::CLASSE);
		        $this->setState(225);
		        $this->match(self::SepInstr);
		        $this->setState(226);
		        $this->liste_champs_structures();
		        $this->setState(227);
		        $this->match(self::FIN);
		        $this->setState(228);
		        $this->match(self::CLASSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dimension_tableau() : Context\Dimension_tableauContext
		{
		    $localContext = new Context\Dimension_tableauContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_dimension_tableau);

		    try {
		        $this->setState(238);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(230);
		        	    $this->match(self::LCROCH);
		        	    $this->setState(231);
		        	    $this->match(self::IntegerT);
		        	    $this->setState(232);
		        	    $this->match(self::RCROCH);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(233);
		        	    $this->match(self::LCROCH);
		        	    $this->setState(234);
		        	    $this->match(self::IntegerT);
		        	    $this->setState(235);
		        	    $this->match(self::DOTDOT);
		        	    $this->setState(236);
		        	    $this->match(self::IntegerT);
		        	    $this->setState(237);
		        	    $this->match(self::RCROCH);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sepInstr() : Context\SepInstrContext
		{
		    $localContext = new Context\SepInstrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_sepInstr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(241); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(240);
		        		$this->match(self::SepInstr);
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(243); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function instruction() : Context\InstructionContext
		{
		    $localContext = new Context\InstructionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_instruction);

		    try {
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(245);
		        	    $this->bloc_instructions();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(246);
		        	    $this->assigne();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(247);
		        	    $this->si_alors();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(248);
		        	    $this->boucle_tantque();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(249);
		        	    $this->boucle_pour();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(250);
		        	    $this->retourne();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(251);
		        	    $this->inclusion_fichier();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(252);
		        	    $this->appel_procedure();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function liste_instructions() : Context\Liste_instructionsContext
		{
		    $localContext = new Context\Liste_instructionsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_liste_instructions);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(255);
		        $this->sepInstr();
		        $this->setState(261);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::DEBUT) | (1 << self::INCLURE) | (1 << self::POUR) | (1 << self::RETOURNE) | (1 << self::SI) | (1 << self::TANTQUE) | (1 << self::ID))) !== 0)) {
		        	$this->setState(256);
		        	$this->instruction();
		        	$this->setState(257);
		        	$this->sepInstr();
		        	$this->setState(263);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloc_instructions() : Context\Bloc_instructionsContext
		{
		    $localContext = new Context\Bloc_instructionsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_bloc_instructions);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(264);
		        $this->match(self::DEBUT);
		        $this->setState(265);
		        $this->liste_instructions();
		        $this->setState(266);
		        $this->match(self::FIN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assigne() : Context\AssigneContext
		{
		    $localContext = new Context\AssigneContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_assigne);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(268);
		        $this->access_ID(CTX_VARIABLE);
		        $this->setState(275);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::LCROCH) {
		        	$this->setState(269);
		        	$this->match(self::LCROCH);
		        	$this->setState(270);
		        	$localContext->index = $this->recursiveExpression(0);
		        	$this->setState(271);
		        	$this->match(self::RCROCH);
		        	$this->setState(277);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(278);
		        $this->match(self::AFFECTE);
		        $this->setState(279);
		        $localContext->exp = $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function si_alors() : Context\Si_alorsContext
		{
		    $localContext = new Context\Si_alorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_si_alors);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(281);
		        $this->match(self::SI);
		        $this->setState(282);
		        $localContext->test = $this->recursiveExpression(0);
		        $this->setState(283);
		        $this->match(self::ALORS);
		        $this->setState(284);
		        $localContext->truepart = $this->liste_instructions();
		        $this->setState(287);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SINON) {
		        	$this->setState(285);
		        	$this->match(self::SINON);
		        	$this->setState(286);
		        	$localContext->falsepart = $this->liste_instructions();
		        }
		        $this->setState(289);
		        $this->match(self::FIN);
		        $this->setState(290);
		        $this->match(self::SI);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function boucle_tantque() : Context\Boucle_tantqueContext
		{
		    $localContext = new Context\Boucle_tantqueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_boucle_tantque);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(292);
		        $this->match(self::TANTQUE);
		        $this->setState(293);
		        $this->recursiveExpression(0);
		        $this->setState(294);
		        $this->match(self::FAIRE);
		        $this->setState(295);
		        $this->liste_instructions();
		        $this->setState(296);
		        $this->match(self::FIN);
		        $this->setState(297);
		        $this->match(self::TANTQUE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function boucle_pour() : Context\Boucle_pourContext
		{
		    $localContext = new Context\Boucle_pourContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_boucle_pour);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(299);
		        $this->match(self::POUR);
		        $this->setState(300);
		        $this->access_ID(CTX_VARIABLE);
		        $this->setState(301);
		        $this->match(self::DANS);
		        $this->setState(302);
		        $this->expression_liste();
		        $this->setState(305);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::AVANCE) {
		        	$this->setState(303);
		        	$this->match(self::AVANCE);
		        	$this->setState(304);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(307);
		        $this->match(self::FAIRE);
		        $this->setState(308);
		        $this->liste_instructions();
		        $this->setState(309);
		        $this->match(self::FIN);
		        $this->setState(310);
		        $this->match(self::POUR);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function retourne() : Context\RetourneContext
		{
		    $localContext = new Context\RetourneContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_retourne);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(312);
		        $this->match(self::RETOURNE);
		        $this->setState(313);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function inclusion_fichier() : Context\Inclusion_fichierContext
		{
		    $localContext = new Context\Inclusion_fichierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_inclusion_fichier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(315);
		        $this->match(self::INCLURE);
		        $this->setState(316);
		        $this->match(self::StringT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function appel_procedure() : Context\Appel_procedureContext
		{
		    $localContext = new Context\Appel_procedureContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_appel_procedure);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(318);
		        $this->access_ID(CTX_PROCEDURE);
		        $this->setState(320);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FALSE) | (1 << self::NOT) | (1 << self::TRUE) | (1 << self::LPAR) | (1 << self::MINUS) | (1 << self::ID) | (1 << self::StringT) | (1 << self::CharT) | (1 << self::NumberT) | (1 << self::IntegerT))) !== 0)) {
		        	$this->setState(319);
		        	$this->parametres();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parametres() : Context\ParametresContext
		{
		    $localContext = new Context\ParametresContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_parametres);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->recursiveExpression(0);
		        $this->setState(327);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(323);
		        	$this->match(self::COMMA);
		        	$this->setState(324);
		        	$this->recursiveExpression(0);
		        	$this->setState(329);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function access_ID(ContextID $rw) : Context\Access_IDContext
		{
		    $localContext = new Context\Access_IDContext($this->ctx, $this->getState(), $rw);

		    $this->enterRule($localContext, 70, self::RULE_access_ID);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(330);
		        $this->match(self::ID);
		        $this->setState(335);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(331);
		        		$this->match(self::DOT);
		        		$this->setState(332);
		        		$this->match(self::ID); 
		        	}

		        	$this->setState(337);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence) : Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 72;
			$this->enterRecursionRule($localContext, 72, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(369);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
					case 1:
					    $localContext = new Context\FonctionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(339);
					    $this->access_ID(CTX_FONCTION);
					    $this->setState(340);
					    $this->match(self::LPAR);
					    $this->setState(342);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FALSE) | (1 << self::NOT) | (1 << self::TRUE) | (1 << self::LPAR) | (1 << self::MINUS) | (1 << self::ID) | (1 << self::StringT) | (1 << self::CharT) | (1 << self::NumberT) | (1 << self::IntegerT))) !== 0)) {
					    	$this->setState(341);
					    	$this->parametres();
					    }
					    $this->setState(344);
					    $this->match(self::RPAR);
					break;

					case 2:
					    $localContext = new Context\VariableContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(346);
					    $this->access_ID(CTX_VARIABLE);
					    $this->setState(353);
					    $this->errorHandler->sync($this);

					    $alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);

					    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					    	if ($alt === 1) {
					    		$this->setState(347);
					    		$this->match(self::LCROCH);
					    		$this->setState(348);
					    		$this->recursiveExpression(0);
					    		$this->setState(349);
					    		$this->match(self::RCROCH); 
					    	}

					    	$this->setState(355);
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);
					    }
					break;

					case 3:
					    $localContext = new Context\OpposeContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(356);
					    $this->match(self::MINUS);
					    $this->setState(357);
					    $this->recursiveExpression(13);
					break;

					case 4:
					    $localContext = new Context\NegationContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(358);
					    $this->match(self::NOT);
					    $this->setState(359);
					    $this->recursiveExpression(12);
					break;

					case 5:
					    $localContext = new Context\NombreContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(360);
					    $this->match(self::NumberT);
					break;

					case 6:
					    $localContext = new Context\EntierContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(361);
					    $this->match(self::IntegerT);
					break;

					case 7:
					    $localContext = new Context\TexteContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(362);
					    $this->match(self::StringT);
					break;

					case 8:
					    $localContext = new Context\CaractereContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(363);
					    $this->match(self::CharT);
					break;

					case 9:
					    $localContext = new Context\ConstanteContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(364);

					    $_la = $this->input->LA(1);

					    if (!($_la === self::FALSE || $_la === self::TRUE)) {
					    $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					break;

					case 10:
					    $localContext = new Context\GroupeContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(365);
					    $this->match(self::LPAR);
					    $this->setState(366);
					    $this->recursiveExpression(0);
					    $this->setState(367);
					    $this->match(self::RPAR);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(389);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(387);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
							case 1:
							    $localContext = new Context\ProduitContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(371);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(372);

							    $localContext->op1 = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::STAR || $_la === self::SLASH)) {
							    	    $localContext->op1 = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(373);
							    $this->recursiveExpression(12);
							break;

							case 2:
							    $localContext = new Context\SommeContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(374);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(375);

							    $localContext->op2 = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::PLUS || $_la === self::MINUS)) {
							    	    $localContext->op2 = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(376);
							    $this->recursiveExpression(11);
							break;

							case 3:
							    $localContext = new Context\ComparaisonContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(377);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(378);
							    $localContext->op3 = $this->opcomp();
							    $this->setState(379);
							    $this->recursiveExpression(10);
							break;

							case 4:
							    $localContext = new Context\Logique_etContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(381);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(382);
							    $this->match(self::AND);
							    $this->setState(383);
							    $this->recursiveExpression(9);
							break;

							case 5:
							    $localContext = new Context\Logique_ouContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(384);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(385);
							    $this->match(self::OR);
							    $this->setState(386);
							    $this->recursiveExpression(8);
							break;
						} 
					}

					$this->setState(391);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function opcomp() : Context\OpcompContext
		{
		    $localContext = new Context\OpcompContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_opcomp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(392);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::GTH) | (1 << self::LTH) | (1 << self::GEQ) | (1 << self::LEQ) | (1 << self::DIFF) | (1 << self::EQU))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression_liste() : Context\Expression_listeContext
		{
		    $localContext = new Context\Expression_listeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_expression_liste);

		    try {
		        $this->setState(413);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(394);
		        	    $this->match(self::LPAR);
		        	    $this->setState(403);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FALSE) | (1 << self::NOT) | (1 << self::TRUE) | (1 << self::LPAR) | (1 << self::MINUS) | (1 << self::ID) | (1 << self::StringT) | (1 << self::CharT) | (1 << self::NumberT) | (1 << self::IntegerT))) !== 0)) {
		        	    	$this->setState(395);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(400);
		        	    	$this->errorHandler->sync($this);

		        	    	$_la = $this->input->LA(1);
		        	    	while ($_la === self::COMMA) {
		        	    		$this->setState(396);
		        	    		$this->match(self::COMMA);
		        	    		$this->setState(397);
		        	    		$this->recursiveExpression(0);
		        	    		$this->setState(402);
		        	    		$this->errorHandler->sync($this);
		        	    		$_la = $this->input->LA(1);
		        	    	}
		        	    }
		        	    $this->setState(405);
		        	    $this->match(self::RPAR);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(406);
		        	    $this->match(self::LCROCH);
		        	    $this->setState(407);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(408);
		        	    $this->match(self::DOTDOT);
		        	    $this->setState(409);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(410);
		        	    $this->match(self::RCROCH);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(412);
		        	    $this->recursiveExpression(0);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 36:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 11);

			    case 1:
			        return $this->precpred($this->ctx, 10);

			    case 2:
			        return $this->precpred($this->ctx, 9);

			    case 3:
			        return $this->precpred($this->ctx, 8);

			    case 4:
			        return $this->precpred($this->ctx, 7);
			}

			return true;
		}
	}
}

namespace Guedel\Algo\Base\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Guedel\Algo\Base\AlgoParser;
	use Guedel\Algo\Base\AlgoVisitor;
	use Guedel\Algo\Base\AlgoListener;

	class AlgorithmeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_algorithme;
	    }

	    public function contexte_algorithme() : ?Contexte_algorithmeContext
	    {
	    	return $this->getTypedRuleContext(Contexte_algorithmeContext::class, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::EOF, 0);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterAlgorithme($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitAlgorithme($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitAlgorithme($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_algorithmeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_algorithme;
	    }

	    public function ALGORITHME() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ALGORITHME, 0);
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ID, 0);
	    }

	    public function sepInstr() : ?SepInstrContext
	    {
	    	return $this->getTypedRuleContext(SepInstrContext::class, 0);
	    }

	    public function bloc() : ?BlocContext
	    {
	    	return $this->getTypedRuleContext(BlocContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_algorithme($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_algorithme($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_algorithme($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlocContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_bloc;
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

	    public function bloc_instructions() : ?Bloc_instructionsContext
	    {
	    	return $this->getTypedRuleContext(Bloc_instructionsContext::class, 0);
	    }

	    /**
	     * @return array<Partie_declarationContext>|Partie_declarationContext|null
	     */
	    public function partie_declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Partie_declarationContext::class);
	    	}

	        return $this->getTypedRuleContext(Partie_declarationContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterBloc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitBloc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitBloc($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Partie_declarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_partie_declaration;
	    }

	    public function contexte_algorithme() : ?Contexte_algorithmeContext
	    {
	    	return $this->getTypedRuleContext(Contexte_algorithmeContext::class, 0);
	    }

	    public function contexte_fonction() : ?Contexte_fonctionContext
	    {
	    	return $this->getTypedRuleContext(Contexte_fonctionContext::class, 0);
	    }

	    public function contexte_procedure() : ?Contexte_procedureContext
	    {
	    	return $this->getTypedRuleContext(Contexte_procedureContext::class, 0);
	    }

	    public function contexte_type() : ?Contexte_typeContext
	    {
	    	return $this->getTypedRuleContext(Contexte_typeContext::class, 0);
	    }

	    public function contexte_variable() : ?Contexte_variableContext
	    {
	    	return $this->getTypedRuleContext(Contexte_variableContext::class, 0);
	    }

	    public function contexte_constante() : ?Contexte_constanteContext
	    {
	    	return $this->getTypedRuleContext(Contexte_constanteContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterPartie_declaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitPartie_declaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitPartie_declaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_fonctionContext extends ParserRuleContext
	{
		/**
		 * @var Introduction_typeContext|null $t
		 */
		public $t;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_fonction;
	    }

	    public function FONCTION() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FONCTION, 0);
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ID, 0);
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LPAR, 0);
	    }

	    public function liste_parametres_formels() : ?Liste_parametres_formelsContext
	    {
	    	return $this->getTypedRuleContext(Liste_parametres_formelsContext::class, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RPAR, 0);
	    }

	    public function bloc() : ?BlocContext
	    {
	    	return $this->getTypedRuleContext(BlocContext::class, 0);
	    }

	    public function introduction_type() : ?Introduction_typeContext
	    {
	    	return $this->getTypedRuleContext(Introduction_typeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_fonction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_fonction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_fonction($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_procedureContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_procedure;
	    }

	    public function PROCEDURE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::PROCEDURE, 0);
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ID, 0);
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LPAR, 0);
	    }

	    public function liste_parametres_formels() : ?Liste_parametres_formelsContext
	    {
	    	return $this->getTypedRuleContext(Liste_parametres_formelsContext::class, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RPAR, 0);
	    }

	    public function bloc() : ?BlocContext
	    {
	    	return $this->getTypedRuleContext(BlocContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_procedure($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_procedure($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_procedure($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_typeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_type;
	    }

	    public function TYPEDEF() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::TYPEDEF, 0);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

	    /**
	     * @return array<Declaration_typedefContext>|Declaration_typedefContext|null
	     */
	    public function declaration_typedef(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Declaration_typedefContext::class);
	    	}

	        return $this->getTypedRuleContext(Declaration_typedefContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_type($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_type($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_type($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_variableContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_variable;
	    }

	    public function VARIABLE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::VARIABLE, 0);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

	    /**
	     * @return array<Declaration_variableContext>|Declaration_variableContext|null
	     */
	    public function declaration_variable(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Declaration_variableContext::class);
	    	}

	        return $this->getTypedRuleContext(Declaration_variableContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_variable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_variable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_variable($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Contexte_constanteContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_contexte_constante;
	    }

	    public function CONSTANTE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::CONSTANTE, 0);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

	    /**
	     * @return array<Declaration_constanteContext>|Declaration_constanteContext|null
	     */
	    public function declaration_constante(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Declaration_constanteContext::class);
	    	}

	        return $this->getTypedRuleContext(Declaration_constanteContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterContexte_constante($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitContexte_constante($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitContexte_constante($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Declaration_variableContext extends ParserRuleContext
	{
		/**
		 * @var Introduction_typeContext|null $t
		 */
		public $t;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_declaration_variable;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::ID);
	    	}

	        return $this->getToken(AlgoParser::ID, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::COMMA);
	    	}

	        return $this->getToken(AlgoParser::COMMA, $index);
	    }

	    public function introduction_type() : ?Introduction_typeContext
	    {
	    	return $this->getTypedRuleContext(Introduction_typeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDeclaration_variable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDeclaration_variable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDeclaration_variable($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Declaration_typedefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_declaration_typedef;
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ID, 0);
	    }

	    public function EQU() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::EQU, 0);
	    }

	    public function type_donnee() : ?Type_donneeContext
	    {
	    	return $this->getTypedRuleContext(Type_donneeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDeclaration_typedef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDeclaration_typedef($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDeclaration_typedef($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Declaration_constanteContext extends ParserRuleContext
	{
		/**
		 * @var Introduction_typeContext|null $t
		 */
		public $t;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_declaration_constante;
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ID, 0);
	    }

	    public function EQU() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::EQU, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function introduction_type() : ?Introduction_typeContext
	    {
	    	return $this->getTypedRuleContext(Introduction_typeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDeclaration_constante($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDeclaration_constante($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDeclaration_constante($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Liste_parametres_formelsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_liste_parametres_formels;
	    }

	    /**
	     * @return array<Declaration_variableContext>|Declaration_variableContext|null
	     */
	    public function declaration_variable(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Declaration_variableContext::class);
	    	}

	        return $this->getTypedRuleContext(Declaration_variableContext::class, $index);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterListe_parametres_formels($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitListe_parametres_formels($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitListe_parametres_formels($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Introduction_typeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_introduction_type;
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::COLON, 0);
	    }

	    public function type_donnee() : ?Type_donneeContext
	    {
	    	return $this->getTypedRuleContext(Type_donneeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterIntroduction_type($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitIntroduction_type($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitIntroduction_type($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_donneeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_type_donnee;
	    }

	    public function type_simple() : ?Type_simpleContext
	    {
	    	return $this->getTypedRuleContext(Type_simpleContext::class, 0);
	    }

	    public function type_complexe() : ?Type_complexeContext
	    {
	    	return $this->getTypedRuleContext(Type_complexeContext::class, 0);
	    }

	    public function reference() : ?ReferenceContext
	    {
	    	return $this->getTypedRuleContext(ReferenceContext::class, 0);
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterType_donnee($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitType_donnee($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitType_donnee($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_simpleContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_type_simple;
	    }

	    public function QUELCONQUE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::QUELCONQUE, 0);
	    }

	    public function ENTIER() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ENTIER, 0);
	    }

	    public function BOOLEEN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::BOOLEEN, 0);
	    }

	    public function DECIMAL() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DECIMAL, 0);
	    }

	    public function CHAINE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::CHAINE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterType_simple($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitType_simple($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitType_simple($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_complexeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_type_complexe;
	    }

	    public function definition_tableau() : ?Definition_tableauContext
	    {
	    	return $this->getTypedRuleContext(Definition_tableauContext::class, 0);
	    }

	    public function definition_structure() : ?Definition_structureContext
	    {
	    	return $this->getTypedRuleContext(Definition_structureContext::class, 0);
	    }

	    public function definition_classe() : ?Definition_classeContext
	    {
	    	return $this->getTypedRuleContext(Definition_classeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterType_complexe($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitType_complexe($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitType_complexe($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReferenceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_reference;
	    }

	    public function REFERENCE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::REFERENCE, 0);
	    }

	    public function type_donnee() : ?Type_donneeContext
	    {
	    	return $this->getTypedRuleContext(Type_donneeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterReference($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitReference($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitReference($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Definition_tableauContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_definition_tableau;
	    }

	    public function TABLEAU() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::TABLEAU, 0);
	    }

	    public function dimension_tableau() : ?Dimension_tableauContext
	    {
	    	return $this->getTypedRuleContext(Dimension_tableauContext::class, 0);
	    }

	    public function DE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DE, 0);
	    }

	    public function type_donnee() : ?Type_donneeContext
	    {
	    	return $this->getTypedRuleContext(Type_donneeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDefinition_tableau($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDefinition_tableau($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDefinition_tableau($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Definition_structureContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_definition_structure;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function STRUCTURE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::STRUCTURE);
	    	}

	        return $this->getToken(AlgoParser::STRUCTURE, $index);
	    }

	    public function SepInstr() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::SepInstr, 0);
	    }

	    public function liste_champs_structures() : ?Liste_champs_structuresContext
	    {
	    	return $this->getTypedRuleContext(Liste_champs_structuresContext::class, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDefinition_structure($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDefinition_structure($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDefinition_structure($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Liste_champs_structuresContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_liste_champs_structures;
	    }

	    /**
	     * @return array<Declaration_variableContext>|Declaration_variableContext|null
	     */
	    public function declaration_variable(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Declaration_variableContext::class);
	    	}

	        return $this->getTypedRuleContext(Declaration_variableContext::class, $index);
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterListe_champs_structures($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitListe_champs_structures($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitListe_champs_structures($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Definition_classeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_definition_classe;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function CLASSE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::CLASSE);
	    	}

	        return $this->getToken(AlgoParser::CLASSE, $index);
	    }

	    public function SepInstr() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::SepInstr, 0);
	    }

	    public function liste_champs_structures() : ?Liste_champs_structuresContext
	    {
	    	return $this->getTypedRuleContext(Liste_champs_structuresContext::class, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDefinition_classe($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDefinition_classe($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDefinition_classe($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Dimension_tableauContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_dimension_tableau;
	    }

	    public function LCROCH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LCROCH, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IntegerT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::IntegerT);
	    	}

	        return $this->getToken(AlgoParser::IntegerT, $index);
	    }

	    public function RCROCH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RCROCH, 0);
	    }

	    public function DOTDOT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DOTDOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterDimension_tableau($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitDimension_tableau($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitDimension_tableau($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SepInstrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_sepInstr;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::SepInstr);
	    	}

	        return $this->getToken(AlgoParser::SepInstr, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterSepInstr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitSepInstr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitSepInstr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InstructionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_instruction;
	    }

	    public function bloc_instructions() : ?Bloc_instructionsContext
	    {
	    	return $this->getTypedRuleContext(Bloc_instructionsContext::class, 0);
	    }

	    public function assigne() : ?AssigneContext
	    {
	    	return $this->getTypedRuleContext(AssigneContext::class, 0);
	    }

	    public function si_alors() : ?Si_alorsContext
	    {
	    	return $this->getTypedRuleContext(Si_alorsContext::class, 0);
	    }

	    public function boucle_tantque() : ?Boucle_tantqueContext
	    {
	    	return $this->getTypedRuleContext(Boucle_tantqueContext::class, 0);
	    }

	    public function boucle_pour() : ?Boucle_pourContext
	    {
	    	return $this->getTypedRuleContext(Boucle_pourContext::class, 0);
	    }

	    public function retourne() : ?RetourneContext
	    {
	    	return $this->getTypedRuleContext(RetourneContext::class, 0);
	    }

	    public function inclusion_fichier() : ?Inclusion_fichierContext
	    {
	    	return $this->getTypedRuleContext(Inclusion_fichierContext::class, 0);
	    }

	    public function appel_procedure() : ?Appel_procedureContext
	    {
	    	return $this->getTypedRuleContext(Appel_procedureContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterInstruction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitInstruction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitInstruction($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Liste_instructionsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_liste_instructions;
	    }

	    /**
	     * @return array<SepInstrContext>|SepInstrContext|null
	     */
	    public function sepInstr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SepInstrContext::class);
	    	}

	        return $this->getTypedRuleContext(SepInstrContext::class, $index);
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterListe_instructions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitListe_instructions($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitListe_instructions($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Bloc_instructionsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_bloc_instructions;
	    }

	    public function DEBUT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DEBUT, 0);
	    }

	    public function liste_instructions() : ?Liste_instructionsContext
	    {
	    	return $this->getTypedRuleContext(Liste_instructionsContext::class, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterBloc_instructions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitBloc_instructions($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitBloc_instructions($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssigneContext extends ParserRuleContext
	{
		/**
		 * @var ExpressionContext|null $index
		 */
		public $index;

		/**
		 * @var ExpressionContext|null $exp
		 */
		public $exp;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_assigne;
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

	    public function AFFECTE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::AFFECTE, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LCROCH(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::LCROCH);
	    	}

	        return $this->getToken(AlgoParser::LCROCH, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RCROCH(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::RCROCH);
	    	}

	        return $this->getToken(AlgoParser::RCROCH, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterAssigne($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitAssigne($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitAssigne($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Si_alorsContext extends ParserRuleContext
	{
		/**
		 * @var ExpressionContext|null $test
		 */
		public $test;

		/**
		 * @var Liste_instructionsContext|null $truepart
		 */
		public $truepart;

		/**
		 * @var Liste_instructionsContext|null $falsepart
		 */
		public $falsepart;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_si_alors;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SI(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::SI);
	    	}

	        return $this->getToken(AlgoParser::SI, $index);
	    }

	    public function ALORS() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::ALORS, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<Liste_instructionsContext>|Liste_instructionsContext|null
	     */
	    public function liste_instructions(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Liste_instructionsContext::class);
	    	}

	        return $this->getTypedRuleContext(Liste_instructionsContext::class, $index);
	    }

	    public function SINON() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::SINON, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterSi_alors($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitSi_alors($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitSi_alors($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Boucle_tantqueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_boucle_tantque;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function TANTQUE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::TANTQUE);
	    	}

	        return $this->getToken(AlgoParser::TANTQUE, $index);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function FAIRE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FAIRE, 0);
	    }

	    public function liste_instructions() : ?Liste_instructionsContext
	    {
	    	return $this->getTypedRuleContext(Liste_instructionsContext::class, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterBoucle_tantque($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitBoucle_tantque($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitBoucle_tantque($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Boucle_pourContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_boucle_pour;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function POUR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::POUR);
	    	}

	        return $this->getToken(AlgoParser::POUR, $index);
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

	    public function DANS() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DANS, 0);
	    }

	    public function expression_liste() : ?Expression_listeContext
	    {
	    	return $this->getTypedRuleContext(Expression_listeContext::class, 0);
	    }

	    public function FAIRE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FAIRE, 0);
	    }

	    public function liste_instructions() : ?Liste_instructionsContext
	    {
	    	return $this->getTypedRuleContext(Liste_instructionsContext::class, 0);
	    }

	    public function FIN() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FIN, 0);
	    }

	    public function AVANCE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::AVANCE, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterBoucle_pour($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitBoucle_pour($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitBoucle_pour($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RetourneContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_retourne;
	    }

	    public function RETOURNE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RETOURNE, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterRetourne($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitRetourne($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitRetourne($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Inclusion_fichierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_inclusion_fichier;
	    }

	    public function INCLURE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::INCLURE, 0);
	    }

	    public function StringT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::StringT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterInclusion_fichier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitInclusion_fichier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitInclusion_fichier($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Appel_procedureContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_appel_procedure;
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

	    public function parametres() : ?ParametresContext
	    {
	    	return $this->getTypedRuleContext(ParametresContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterAppel_procedure($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitAppel_procedure($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitAppel_procedure($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParametresContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_parametres;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::COMMA);
	    	}

	        return $this->getToken(AlgoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterParametres($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitParametres($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitParametres($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Access_IDContext extends ParserRuleContext
	{
		/**
		 * @var ContextID|null $rw
		 */
		public $rw;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null, ?ContextID $rw = null)
		{
			parent::__construct($parent, $invokingState);

			$this->rw = $rw ?? $this->rw;
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_access_ID;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::ID);
	    	}

	        return $this->getToken(AlgoParser::ID, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::DOT);
	    	}

	        return $this->getToken(AlgoParser::DOT, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterAccess_ID($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitAccess_ID($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitAccess_ID($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class SommeContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op2
		 */
		public $op2;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::PLUS, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterSomme($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitSomme($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitSomme($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NegationContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::NOT, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterNegation($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitNegation($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitNegation($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CaractereContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CharT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::CharT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterCaractere($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitCaractere($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitCaractere($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ProduitContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op1
		 */
		public $op1;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::STAR, 0);
	    }

	    public function SLASH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::SLASH, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterProduit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitProduit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitProduit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TexteContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function StringT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::StringT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterTexte($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitTexte($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitTexte($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Logique_ouContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterLogique_ou($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitLogique_ou($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitLogique_ou($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NombreContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NumberT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::NumberT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterNombre($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitNombre($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitNombre($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class Logique_etContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function AND() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterLogique_et($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitLogique_et($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitLogique_et($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConstanteContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TRUE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::TRUE, 0);
	    }

	    public function FALSE() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterConstante($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitConstante($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitConstante($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EntierContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IntegerT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::IntegerT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterEntier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitEntier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitEntier($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ComparaisonContext extends ExpressionContext
	{
		/**
		 * @var OpcompContext|null $op3
		 */
		public $op3;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function opcomp() : ?OpcompContext
	    {
	    	return $this->getTypedRuleContext(OpcompContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterComparaison($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitComparaison($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitComparaison($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FonctionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LPAR, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RPAR, 0);
	    }

	    public function parametres() : ?ParametresContext
	    {
	    	return $this->getTypedRuleContext(ParametresContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterFonction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitFonction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitFonction($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class VariableContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function access_ID() : ?Access_IDContext
	    {
	    	return $this->getTypedRuleContext(Access_IDContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LCROCH(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::LCROCH);
	    	}

	        return $this->getToken(AlgoParser::LCROCH, $index);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RCROCH(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::RCROCH);
	    	}

	        return $this->getToken(AlgoParser::RCROCH, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterVariable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitVariable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitVariable($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class OpposeContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::MINUS, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterOppose($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitOppose($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitOppose($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class GroupeContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LPAR, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RPAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterGroupe($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitGroupe($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitGroupe($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OpcompContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_opcomp;
	    }

	    public function GTH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::GTH, 0);
	    }

	    public function LTH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LTH, 0);
	    }

	    public function GEQ() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::GEQ, 0);
	    }

	    public function LEQ() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LEQ, 0);
	    }

	    public function DIFF() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DIFF, 0);
	    }

	    public function EQU() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::EQU, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterOpcomp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitOpcomp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitOpcomp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Expression_listeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return AlgoParser::RULE_expression_liste;
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LPAR, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RPAR, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(AlgoParser::COMMA);
	    	}

	        return $this->getToken(AlgoParser::COMMA, $index);
	    }

	    public function LCROCH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::LCROCH, 0);
	    }

	    public function DOTDOT() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::DOTDOT, 0);
	    }

	    public function RCROCH() : ?TerminalNode
	    {
	        return $this->getToken(AlgoParser::RCROCH, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->enterExpression_liste($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof AlgoListener) {
			    $listener->exitExpression_liste($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof AlgoVisitor) {
			    return $visitor->visitExpression_liste($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}