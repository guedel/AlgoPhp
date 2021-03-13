<?php

/*
 * Generated from src/Algo.g4 by ANTLR 4.9.2
 */

namespace Guedel\Algo\Base;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see AlgoParser}.
 */
interface AlgoListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see AlgoParser::algorithme()}.
	 * @param $context The parse tree.
	 */
	public function enterAlgorithme(Context\AlgorithmeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::algorithme()}.
	 * @param $context The parse tree.
	 */
	public function exitAlgorithme(Context\AlgorithmeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_algorithme()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_algorithme(Context\Contexte_algorithmeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_algorithme()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_algorithme(Context\Contexte_algorithmeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::bloc()}.
	 * @param $context The parse tree.
	 */
	public function enterBloc(Context\BlocContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::bloc()}.
	 * @param $context The parse tree.
	 */
	public function exitBloc(Context\BlocContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::partie_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterPartie_declaration(Context\Partie_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::partie_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitPartie_declaration(Context\Partie_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_fonction()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_fonction(Context\Contexte_fonctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_fonction()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_fonction(Context\Contexte_fonctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_procedure()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_procedure(Context\Contexte_procedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_procedure()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_procedure(Context\Contexte_procedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_type()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_type(Context\Contexte_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_type()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_type(Context\Contexte_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_variable()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_variable(Context\Contexte_variableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_variable()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_variable(Context\Contexte_variableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::contexte_constante()}.
	 * @param $context The parse tree.
	 */
	public function enterContexte_constante(Context\Contexte_constanteContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::contexte_constante()}.
	 * @param $context The parse tree.
	 */
	public function exitContexte_constante(Context\Contexte_constanteContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::declaration_variable()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration_variable(Context\Declaration_variableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::declaration_variable()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration_variable(Context\Declaration_variableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::declaration_typedef()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration_typedef(Context\Declaration_typedefContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::declaration_typedef()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration_typedef(Context\Declaration_typedefContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::declaration_constante()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration_constante(Context\Declaration_constanteContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::declaration_constante()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration_constante(Context\Declaration_constanteContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::liste_parametres_formels()}.
	 * @param $context The parse tree.
	 */
	public function enterListe_parametres_formels(Context\Liste_parametres_formelsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::liste_parametres_formels()}.
	 * @param $context The parse tree.
	 */
	public function exitListe_parametres_formels(Context\Liste_parametres_formelsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::introduction_type()}.
	 * @param $context The parse tree.
	 */
	public function enterIntroduction_type(Context\Introduction_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::introduction_type()}.
	 * @param $context The parse tree.
	 */
	public function exitIntroduction_type(Context\Introduction_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::type_donnee()}.
	 * @param $context The parse tree.
	 */
	public function enterType_donnee(Context\Type_donneeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::type_donnee()}.
	 * @param $context The parse tree.
	 */
	public function exitType_donnee(Context\Type_donneeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::type_simple()}.
	 * @param $context The parse tree.
	 */
	public function enterType_simple(Context\Type_simpleContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::type_simple()}.
	 * @param $context The parse tree.
	 */
	public function exitType_simple(Context\Type_simpleContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::type_complexe()}.
	 * @param $context The parse tree.
	 */
	public function enterType_complexe(Context\Type_complexeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::type_complexe()}.
	 * @param $context The parse tree.
	 */
	public function exitType_complexe(Context\Type_complexeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::reference()}.
	 * @param $context The parse tree.
	 */
	public function enterReference(Context\ReferenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::reference()}.
	 * @param $context The parse tree.
	 */
	public function exitReference(Context\ReferenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::definition_tableau()}.
	 * @param $context The parse tree.
	 */
	public function enterDefinition_tableau(Context\Definition_tableauContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::definition_tableau()}.
	 * @param $context The parse tree.
	 */
	public function exitDefinition_tableau(Context\Definition_tableauContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::definition_structure()}.
	 * @param $context The parse tree.
	 */
	public function enterDefinition_structure(Context\Definition_structureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::definition_structure()}.
	 * @param $context The parse tree.
	 */
	public function exitDefinition_structure(Context\Definition_structureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::liste_champs_structures()}.
	 * @param $context The parse tree.
	 */
	public function enterListe_champs_structures(Context\Liste_champs_structuresContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::liste_champs_structures()}.
	 * @param $context The parse tree.
	 */
	public function exitListe_champs_structures(Context\Liste_champs_structuresContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::definition_classe()}.
	 * @param $context The parse tree.
	 */
	public function enterDefinition_classe(Context\Definition_classeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::definition_classe()}.
	 * @param $context The parse tree.
	 */
	public function exitDefinition_classe(Context\Definition_classeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::dimension_tableau()}.
	 * @param $context The parse tree.
	 */
	public function enterDimension_tableau(Context\Dimension_tableauContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::dimension_tableau()}.
	 * @param $context The parse tree.
	 */
	public function exitDimension_tableau(Context\Dimension_tableauContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::sepInstr()}.
	 * @param $context The parse tree.
	 */
	public function enterSepInstr(Context\SepInstrContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::sepInstr()}.
	 * @param $context The parse tree.
	 */
	public function exitSepInstr(Context\SepInstrContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::instruction()}.
	 * @param $context The parse tree.
	 */
	public function enterInstruction(Context\InstructionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::instruction()}.
	 * @param $context The parse tree.
	 */
	public function exitInstruction(Context\InstructionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::liste_instructions()}.
	 * @param $context The parse tree.
	 */
	public function enterListe_instructions(Context\Liste_instructionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::liste_instructions()}.
	 * @param $context The parse tree.
	 */
	public function exitListe_instructions(Context\Liste_instructionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::bloc_instructions()}.
	 * @param $context The parse tree.
	 */
	public function enterBloc_instructions(Context\Bloc_instructionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::bloc_instructions()}.
	 * @param $context The parse tree.
	 */
	public function exitBloc_instructions(Context\Bloc_instructionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::assigne()}.
	 * @param $context The parse tree.
	 */
	public function enterAssigne(Context\AssigneContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::assigne()}.
	 * @param $context The parse tree.
	 */
	public function exitAssigne(Context\AssigneContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::si_alors()}.
	 * @param $context The parse tree.
	 */
	public function enterSi_alors(Context\Si_alorsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::si_alors()}.
	 * @param $context The parse tree.
	 */
	public function exitSi_alors(Context\Si_alorsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::boucle_tantque()}.
	 * @param $context The parse tree.
	 */
	public function enterBoucle_tantque(Context\Boucle_tantqueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::boucle_tantque()}.
	 * @param $context The parse tree.
	 */
	public function exitBoucle_tantque(Context\Boucle_tantqueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::boucle_pour()}.
	 * @param $context The parse tree.
	 */
	public function enterBoucle_pour(Context\Boucle_pourContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::boucle_pour()}.
	 * @param $context The parse tree.
	 */
	public function exitBoucle_pour(Context\Boucle_pourContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::retourne()}.
	 * @param $context The parse tree.
	 */
	public function enterRetourne(Context\RetourneContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::retourne()}.
	 * @param $context The parse tree.
	 */
	public function exitRetourne(Context\RetourneContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::inclusion_fichier()}.
	 * @param $context The parse tree.
	 */
	public function enterInclusion_fichier(Context\Inclusion_fichierContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::inclusion_fichier()}.
	 * @param $context The parse tree.
	 */
	public function exitInclusion_fichier(Context\Inclusion_fichierContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::appel_procedure()}.
	 * @param $context The parse tree.
	 */
	public function enterAppel_procedure(Context\Appel_procedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::appel_procedure()}.
	 * @param $context The parse tree.
	 */
	public function exitAppel_procedure(Context\Appel_procedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::parametres()}.
	 * @param $context The parse tree.
	 */
	public function enterParametres(Context\ParametresContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::parametres()}.
	 * @param $context The parse tree.
	 */
	public function exitParametres(Context\ParametresContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::access_ID()}.
	 * @param $context The parse tree.
	 */
	public function enterAccess_ID(Context\Access_IDContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::access_ID()}.
	 * @param $context The parse tree.
	 */
	public function exitAccess_ID(Context\Access_IDContext $context) : void;
	/**
	 * Enter a parse tree produced by the `somme`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterSomme(Context\SommeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `somme` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitSomme(Context\SommeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `negation`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNegation(Context\NegationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `negation` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNegation(Context\NegationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `caractere`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCaractere(Context\CaractereContext $context) : void;
	/**
	 * Exit a parse tree produced by the `caractere` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCaractere(Context\CaractereContext $context) : void;
	/**
	 * Enter a parse tree produced by the `produit`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterProduit(Context\ProduitContext $context) : void;
	/**
	 * Exit a parse tree produced by the `produit` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitProduit(Context\ProduitContext $context) : void;
	/**
	 * Enter a parse tree produced by the `texte`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterTexte(Context\TexteContext $context) : void;
	/**
	 * Exit a parse tree produced by the `texte` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitTexte(Context\TexteContext $context) : void;
	/**
	 * Enter a parse tree produced by the `logique_ou`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogique_ou(Context\Logique_ouContext $context) : void;
	/**
	 * Exit a parse tree produced by the `logique_ou` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogique_ou(Context\Logique_ouContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nombre`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNombre(Context\NombreContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nombre` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNombre(Context\NombreContext $context) : void;
	/**
	 * Enter a parse tree produced by the `logique_et`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogique_et(Context\Logique_etContext $context) : void;
	/**
	 * Exit a parse tree produced by the `logique_et` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogique_et(Context\Logique_etContext $context) : void;
	/**
	 * Enter a parse tree produced by the `constante`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterConstante(Context\ConstanteContext $context) : void;
	/**
	 * Exit a parse tree produced by the `constante` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitConstante(Context\ConstanteContext $context) : void;
	/**
	 * Enter a parse tree produced by the `entier`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterEntier(Context\EntierContext $context) : void;
	/**
	 * Exit a parse tree produced by the `entier` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitEntier(Context\EntierContext $context) : void;
	/**
	 * Enter a parse tree produced by the `comparaison`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterComparaison(Context\ComparaisonContext $context) : void;
	/**
	 * Exit a parse tree produced by the `comparaison` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitComparaison(Context\ComparaisonContext $context) : void;
	/**
	 * Enter a parse tree produced by the `fonction`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterFonction(Context\FonctionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `fonction` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitFonction(Context\FonctionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `variable`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterVariable(Context\VariableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `variable` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitVariable(Context\VariableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `oppose`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterOppose(Context\OpposeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `oppose` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitOppose(Context\OpposeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `groupe`
	 * labeled alternative in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupe(Context\GroupeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `groupe` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupe(Context\GroupeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::opcomp()}.
	 * @param $context The parse tree.
	 */
	public function enterOpcomp(Context\OpcompContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::opcomp()}.
	 * @param $context The parse tree.
	 */
	public function exitOpcomp(Context\OpcompContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see AlgoParser::expression_liste()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression_liste(Context\Expression_listeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see AlgoParser::expression_liste()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression_liste(Context\Expression_listeContext $context) : void;
}