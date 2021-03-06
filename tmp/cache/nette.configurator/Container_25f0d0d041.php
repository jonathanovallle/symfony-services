<?php
// source: phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon
// source: /Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/extension.neon
// source: /Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/rules.neon
// source: /Users/jonathan/O2O/symfony-services/phpstan.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_25f0d0d041 extends _PHPStan_7bd9fb728\Nette\DI\Container
{
	protected $tags = [
		'phpstan.parser.richParserNodeVisitor' => [
			'04' => true,
			'05' => true,
			'06' => true,
			'07' => true,
			'08' => true,
			'056' => true,
		],
		'phpstan.stubFilesExtension' => ['027' => true, '0330' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['073' => true, '077' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['074' => true, '078' => true, '0188' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0159' => true,
			'0160' => true,
			'0162' => true,
			'0163' => true,
			'0164' => true,
			'0166' => true,
			'0168' => true,
			'0173' => true,
			'0174' => true,
			'0175' => true,
			'0176' => true,
			'0177' => true,
			'0178' => true,
			'0179' => true,
			'0180' => true,
			'0190' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0220' => true,
			'0221' => true,
			'0222' => true,
			'0240' => true,
			'0247' => true,
			'0248' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0254' => true,
			'0255' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0135' => true,
			'0151' => true,
			'0161' => true,
			'0187' => true,
			'0191' => true,
			'0192' => true,
			'0223' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'0227' => true,
			'0228' => true,
			'0229' => true,
			'0230' => true,
			'0231' => true,
			'0232' => true,
			'0233' => true,
			'0234' => true,
			'0235' => true,
			'0236' => true,
			'0237' => true,
			'0238' => true,
			'0239' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0246' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0156' => true,
			'0158' => true,
			'0256' => true,
			'0262' => true,
			'0323' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0157' => true,
			'0165' => true,
			'0169' => true,
			'0170' => true,
			'0172' => true,
			'0190' => true,
			'0214' => true,
			'0249' => true,
			'0250' => true,
			'0256' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0296' => true,
			'0297' => true,
			'0298' => true,
			'0299' => true,
			'0304' => true,
			'0306' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0313' => true,
			'0314' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0319' => true,
			'0320' => true,
			'0321' => true,
			'0322' => true,
			'0324' => true,
			'0325' => true,
			'0326' => true,
			'0327' => true,
			'0328' => true,
			'0329' => true,
			'0331' => true,
			'0332' => true,
			'0333' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0167' => true,
			'0171' => true,
			'0183' => true,
			'0184' => true,
			'0185' => true,
			'0186' => true,
			'0189' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0181' => true, '0182' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => [
			'0198' => true,
			'0300' => true,
			'0301' => true,
			'0302' => true,
			'0303' => true,
			'0305' => true,
			'0312' => true,
			'0315' => true,
			'0334' => true,
		],
		'phpstan.rules.rule' => [
			'0268' => true,
			'0269' => true,
			'0270' => true,
			'0271' => true,
			'0272' => true,
			'0273' => true,
			'0274' => true,
			'0275' => true,
			'0276' => true,
			'0277' => true,
			'0278' => true,
			'0279' => true,
			'0280' => true,
			'0281' => true,
			'0282' => true,
			'0283' => true,
			'0284' => true,
			'0286' => true,
			'0287' => true,
			'0288' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_7bd9fb728\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_7bd9fb728\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'093',
				'094',
				'096',
				'097',
				'0110',
				'0268',
				'0269',
				'0270',
				'0271',
				'0272',
				'0273',
				'0274',
				'0275',
				'0276',
				'0277',
				'0278',
				'0279',
				'0280',
				'0281',
				'0282',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0288',
				'0289',
				'0290',
				'0291',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.1']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['rules.2']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['rules.3']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['rules.4']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['rules.5']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['rules.6']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['rules.7']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['rules.8']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['rules.9']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['rules.10']],
		'PHPStan\Rules\Arrays\EmptyArrayItemRule' => [['rules.11']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['rules.12']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['rules.13']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['rules.14']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['rules.15']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['rules.16']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['rules.17']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['rules.18']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['rules.19']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['rules.20']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['rules.21']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['rules.22']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['rules.23']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['rules.24']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['rules.25']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['rules.26']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['rules.27']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['rules.28']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['rules.29']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['rules.30']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['rules.31']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['rules.32']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['rules.33']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['rules.34']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['rules.35']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['rules.36']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['rules.37']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['rules.38']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['rules.39']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['rules.40']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['rules.41']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['rules.42']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['rules.43']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['rules.44']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['rules.45']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['rules.46']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['rules.47']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['rules.48']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['rules.49']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['rules.50']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['rules.51']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['rules.52']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['rules.53']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['rules.54']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['rules.55']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['rules.56']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['rules.57']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['rules.58']],
		'PHPStan\Rules\Variables\UnsetRule' => [['rules.59']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['rules.60']],
		'PHPStan\Rules\Symfony\ContainerInterfacePrivateServiceRule' => [['rules.61']],
		'PHPStan\Rules\Symfony\ContainerInterfaceUnknownServiceRule' => [['rules.62']],
		'PHPStan\Rules\Symfony\UndefinedArgumentRule' => [['rules.63']],
		'PHPStan\Rules\Symfony\InvalidArgumentDefaultValueRule' => [['rules.64']],
		'PHPStan\Rules\Symfony\UndefinedOptionRule' => [['rules.65']],
		'PHPStan\Rules\Symfony\InvalidOptionDefaultValueRule' => [['rules.66']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [['03', '04', '05', '06', '07', '08', '09', '044', '056', '064']],
		'PhpParser\NodeVisitor' => [['03', '04', '05', '06', '07', '08', '09', '044', '056', '064']],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['04']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['05']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['06']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['07']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['08']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['09']],
		'PhpParser\PrettyPrinterAbstract' => [['010']],
		'PhpParser\PrettyPrinter\Standard' => [['010']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['011']],
		'PHPStan\Php\PhpVersion' => [['012']],
		'PHPStan\Php\PhpVersionFactory' => [['013']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['014']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['015']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['016']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['017']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['018']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['019']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['020']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['021']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['022']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['023']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['024']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['025']],
		'PHPStan\PhpDoc\StubValidator' => [['026']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['027', '0330']],
		'PHPStan\PhpDoc\CountableStubFilesExtension' => [['027']],
		'PHPStan\Analyser\Analyser' => [['028']],
		'PHPStan\Analyser\FileAnalyser' => [['029']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['030']],
		'PHPStan\Analyser\ScopeFactory' => [['031']],
		'PHPStan\Analyser\LazyScopeFactory' => [['031']],
		'PHPStan\Analyser\NodeScopeResolver' => [['032']],
		'PHPStan\Analyser\ConstantResolver' => [['033']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['034']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['035']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['036']],
		'PHPStan\Cache\Cache' => [['037']],
		'PHPStan\Command\AnalyseApplication' => [['038']],
		'PHPStan\Command\AnalyserRunner' => [['039']],
		'PHPStan\Command\FixerApplication' => [['040']],
		'PHPStan\Dependency\DependencyResolver' => [['041']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['042']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['043']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['044']],
		'PHPStan\DependencyInjection\Container' => [['045'], ['046']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['046']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['047']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['048']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['049']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['050']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['051']],
		'PHPStan\File\FileHelper' => [['052']],
		'PHPStan\File\FileExcluderFactory' => [['053']],
		'PHPStan\File\FileExcluderRawFactory' => [['054']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['055']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['056']],
		'PHPStan\Parallel\ParallelAnalyser' => [['057']],
		'PHPStan\Parallel\Scheduler' => [['058']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['059']],
		'PHPStan\Process\CpuCoreCounter' => [['060']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['061']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['062', '073', '075', '077']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['062']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['063', '074', '075', '078', '0188']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['063']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['064']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['065']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['066'],
			2 => [1 => 'betterReflectionSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['066']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['067']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['068']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['069']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['070']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['071']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['072']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['073']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['074']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['075']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['076']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['077']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['078']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['079']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['080']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['081']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['085'], ['082', '083']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['082']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['083']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['084']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['086']],
		'PHPStan\Rules\AttributesCheck' => [['087']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['088']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['089']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['090']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['091']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['092'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['092']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['093']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['094']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['095']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['096']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['097']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['098']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['099']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0100']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0101']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0102']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0103']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0104']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0105']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0106']],
		'PHPStan\Rules\IssetCheck' => [['0107']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0108']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0109']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0110']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0111']],
		'PHPStan\Rules\NullsafeCheck' => [['0112']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0113']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0113']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0114']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0115']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0116']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0116']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0117']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0118']],
		'PHPStan\Rules\RegistryFactory' => [['0119']],
		'PHPStan\Rules\RuleLevelHelper' => [['0120']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0121']],
		'PHPStan\Type\FileTypeMapper' => [['0122']],
		'PHPStan\Type\TypeAliasResolver' => [['0123']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0124']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0125']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0152',
				'0153',
				'0154',
				'0155',
				'0159',
				'0160',
				'0162',
				'0163',
				'0164',
				'0166',
				'0168',
				'0173',
				'0174',
				'0175',
				'0176',
				'0177',
				'0178',
				'0179',
				'0180',
				'0190',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0220',
				'0221',
				'0222',
				'0240',
				'0247',
				'0248',
				'0251',
				'0252',
				'0253',
				'0254',
				'0255',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0135',
				'0151',
				'0161',
				'0187',
				'0191',
				'0192',
				'0223',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
				'0229',
				'0230',
				'0231',
				'0232',
				'0233',
				'0234',
				'0235',
				'0236',
				'0237',
				'0238',
				'0239',
				'0241',
				'0242',
				'0243',
				'0244',
				'0246',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0135',
				'0151',
				'0161',
				'0187',
				'0191',
				'0192',
				'0198',
				'0223',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
				'0229',
				'0230',
				'0231',
				'0232',
				'0233',
				'0234',
				'0235',
				'0236',
				'0237',
				'0238',
				'0239',
				'0241',
				'0242',
				'0243',
				'0244',
				'0246',
				'0248',
				'0300',
				'0301',
				'0302',
				'0303',
				'0305',
				'0312',
				'0315',
				'0334',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0135']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0138']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0142']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0143']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0147']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0149']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0150']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0151']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0155']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0156', '0158', '0256', '0262', '0323']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'0157',
				'0165',
				'0169',
				'0170',
				'0172',
				'0190',
				'0214',
				'0249',
				'0250',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0296',
				'0297',
				'0298',
				'0299',
				'0304',
				'0306',
				'0307',
				'0308',
				'0309',
				'0310',
				'0311',
				'0313',
				'0314',
				'0316',
				'0317',
				'0318',
				'0319',
				'0320',
				'0321',
				'0322',
				'0324',
				'0325',
				'0326',
				'0327',
				'0328',
				'0329',
				'0331',
				'0332',
				'0333',
			],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0161']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0163']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0164']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0165']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0166']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [['0167', '0171', '0183', '0184', '0185', '0186', '0189']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0167']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0169', '0170']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0171']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0173']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0179']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0180']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0181', '0182']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0181']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0182']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0183']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0184']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0185']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0186']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0187']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0188']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0189']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0191']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0192']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0196']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0197']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [
			['0198', '0300', '0301', '0302', '0303', '0305', '0312', '0315', '0334'],
		],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0198']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0203']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0204']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0205']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0208']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0216']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0220']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0223']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0224']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0225']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0226']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0227']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0228']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0229']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0230']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0231']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0232']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0233']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0234']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0235']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0236']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0237']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0238']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0239']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0240']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0241']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0242']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0243']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0244']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0245']],
		'PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension' => [['0246']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0247']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0248']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0249']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0250']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0252']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0255']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0257', '0258', '0259', '0260', '0261']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0262']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 'runtimeReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [
				1 => 'betterReflectionReflector',
				'betterReflectionClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'nodeScopeResolverReflector',
			],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [2 => ['betterReflectionClassReflector']],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0263']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0264']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0265']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0266', '0267']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0266']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0267']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0268']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0269']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0270']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0271']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0272']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0273']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0274']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0275']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0276']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0277']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0278']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0279']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0280']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0281']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0282']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['0283']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0284']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0285']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0286']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0287']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0288']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0289']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0290']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0291']],
		'PHPStan\Symfony\Configuration' => [['0292']],
		'PHPStan\Symfony\ConsoleApplicationResolver' => [['0293']],
		'PHPStan\Symfony\ServiceMapFactory' => [['symfony.serviceMapFactory']],
		'PHPStan\Symfony\ServiceMap' => [['0294']],
		'PHPStan\Symfony\ParameterMapFactory' => [['symfony.parameterMapFactory']],
		'PHPStan\Symfony\ParameterMap' => [['0295']],
		'PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension' => [['0296', '0297', '0298', '0299']],
		'PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension' => [['0300', '0301', '0302', '0303']],
		'PHPStan\Type\Symfony\RequestDynamicReturnTypeExtension' => [['0304']],
		'PHPStan\Type\Symfony\RequestTypeSpecifyingExtension' => [['0305']],
		'PHPStan\Type\Symfony\InputBagDynamicReturnTypeExtension' => [['0306']],
		'PHPStan\Type\Symfony\HeaderBagDynamicReturnTypeExtension' => [['0307']],
		'PHPStan\Type\Symfony\SerializerDynamicReturnTypeExtension' => [['0308', '0309']],
		'PHPStan\Type\Symfony\EnvelopeReturnTypeExtension' => [['0310']],
		'PHPStan\Type\Symfony\InputInterfaceGetArgumentDynamicReturnTypeExtension' => [['0311']],
		'PHPStan\Type\Symfony\ArgumentTypeSpecifyingExtension' => [['0312']],
		'PHPStan\Type\Symfony\InputInterfaceHasArgumentDynamicReturnTypeExtension' => [['0313']],
		'PHPStan\Type\Symfony\InputInterfaceGetOptionDynamicReturnTypeExtension' => [['0314']],
		'PHPStan\Type\Symfony\OptionTypeSpecifyingExtension' => [['0315']],
		'PHPStan\Type\Symfony\InputInterfaceHasOptionDynamicReturnTypeExtension' => [['0316']],
		'PHPStan\Type\Symfony\Config\ArrayNodeDefinitionPrototypeDynamicReturnTypeExtension' => [['0317']],
		'PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension' => [['0318', '0320', '0322']],
		'PHPStan\Type\Symfony\Config\PassParentObjectDynamicReturnTypeExtension' => [['0319', '0321']],
		'PHPStan\Type\Symfony\Config\TreeBuilderDynamicReturnTypeExtension' => [['0323']],
		'PHPStan\Type\Symfony\Config\TreeBuilderGetRootNodeDynamicReturnTypeExtension' => [['0324']],
		'PHPStan\Type\Symfony\KernelInterfaceDynamicReturnTypeExtension' => [['0325']],
		'PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension' => [['0326', '0327', '0328', '0329']],
		'PHPStan\Symfony\InputBagStubFilesExtension' => [['0330']],
		'PHPStan\Type\Symfony\Form\FormInterfaceDynamicReturnTypeExtension' => [['0331']],
		'PHPStan\Type\Symfony\CommandGetHelperDynamicReturnTypeExtension' => [['0332']],
		'PHPStan\Type\Symfony\ResponseHeaderBagDynamicReturnTypeExtension' => [['0333']],
		'PHPStan\Type\Symfony\InputBagTypeSpecifyingExtension' => [['0334']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'stubFiles' => [
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheItemInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/KernelBrowser.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/KernelTestCase.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/TestContainer.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Command.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Helper/HelperInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/ChoiceList/Loader/ChoiceLoaderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/ContainerBuilder.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/Extension/ExtensionInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventDispatcherInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventSubscriberInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/GenericEvent.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/DataTransformerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormBuilderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeExtensionInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormView.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Cookie.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/HeaderBag.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/ParameterBag.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Session.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/StampInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/Envelope.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Process.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyPathInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/AclInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/EntryInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/ContextAwareDecoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/DecoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/EncoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareDenormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareNormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizableInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizableInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraint.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationListInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CacheInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CallbackInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/ItemInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Twig/Node/Node.stub',
			],
			'bootstrapFiles' => [
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => null,
			'level' => 'max',
			'paths' => ['/Users/jonathan/O2O/symfony-services/src'],
			'exceptions' => [
				'implicitThrows' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => ['Symfony\Component\Console\Exception\InvalidArgumentException'],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => true,
				'disableRuntimeReflectionProvider' => true,
				'skipCheckGenericClasses' => [
					'DatePeriod',
					'CallbackFilterIterator',
					'FilterIterator',
					'RecursiveCallbackFilterIterator',
				],
				'explicitMixedInUnknownGenericNew' => true,
				'explicitMixedViaIsArray' => true,
				'arrayFilter' => true,
				'arrayUnpacking' => true,
				'nodeConnectingVisitorCompatibility' => false,
				'nodeConnectingVisitorRule' => true,
				'illegalConstructorMethodCall' => false,
				'disableCheckMissingIterableValueType' => true,
				'strictUnnecessaryNullsafePropertyFetch' => true,
				'looseComparison' => true,
			],
			'fileExtensions' => ['php', 'php'],
			'checkAdvancedIsset' => false,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkAlwaysTrueLooseComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 300.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/Users/jonathan/O2O/symfony-services/tmp/.memory_limit',
			'tempResultCachePath' => '/Users/jonathan/O2O/symfony-services/tmp/resultCaches',
			'resultCachePath' => '/Users/jonathan/O2O/symfony-services/tmp/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => [
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'Symfony\Component\HttpKernel\Kernel::VERSION_ID',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'__validate' => true,
			'symfony' => [
				'container_xml_path' => null,
				'containerXmlPath' => null,
				'constant_hassers' => true,
				'constantHassers' => true,
				'console_application_loader' => null,
				'consoleApplicationLoader' => null,
			],
			'tmpDir' => '/Users/jonathan/O2O/symfony-services/tmp',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/jonathan/O2O/symfony-services/tmp',
			'rootDir' => '/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/jonathan/O2O/symfony-services',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/extension.neon',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/rules.neon',
				'/Users/jonathan/O2O/symfony-services/phpstan.neon',
			],
			'composerAutoloaderProjectPaths' => [
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/..',
				'/Users/jonathan/O2O/symfony-services',
			],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'fixerTmpDir' => '/var/folders/j7/_dt004bs6nn9wff2qmmfdbmm0000gn/T/phpstan-fixer',
			'singleReflectionFile' => null,
			'singleReflectionInsteadOfFile' => null,
			'analysedPaths' => null,
			'analysedPathsFromConfig' => null,
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('012'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(null, ['preserveOriginalNames' => true]);
	}


	public function createService04(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService05(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService06(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService07(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService08(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService09(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService010(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService011(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('052'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService012(): PHPStan\Php\PhpVersion
	{
		return $this->getService('013')->create();
	}


	public function createService013(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('014')->create();
	}


	public function createService014(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			['/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/..', '/Users/jonathan/O2O/symfony-services']
		);
	}


	public function createService015(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService016(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('017'));
	}


	public function createService017(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService018(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('016'), $this->getService('017'));
	}


	public function createService019(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0122'), $this->getService('stubPhpDocProvider'));
	}


	public function createService020(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('023'), $this->getService('022'), $this->getService('0115'));
	}


	public function createService021(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('015'), $this->getService('018'));
	}


	public function createService022(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService023(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('024'),
			$this->getService('079'),
			$this->getService('0124'),
			$this->getService('033')
		);
	}


	public function createService024(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('045'));
	}


	public function createService025(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('015'), $this->getService('016'), $this->getService('023'));
	}


	public function createService026(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('047'));
	}


	public function createService027(): PHPStan\PhpDoc\CountableStubFilesExtension
	{
		return new PHPStan\PhpDoc\CountableStubFilesExtension(true);
	}


	public function createService028(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('029'), $this->getService('registry'), $this->getService('032'), 50);
	}


	public function createService029(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('031'),
			$this->getService('032'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('041'),
			true
		);
	}


	public function createService030(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper($this->getService('052'), [], true);
	}


	public function createService031(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('045'));
	}


	public function createService032(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('048'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0122'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('012'),
			$this->getService('019'),
			$this->getService('052'),
			$this->getService('typeSpecifier'),
			$this->getService('051'),
			true,
			true,
			[],
			[],
			true
		);
	}


	public function createService033(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('034')->create();
	}


	public function createService034(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('079'), $this->getService('045'));
	}


	public function createService035(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('042'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					'/Users/jonathan/O2O/symfony-services/tmp/resultCache.php',
					'/Users/jonathan/O2O/symfony-services/tmp/resultCaches',
					$this->container->parameters['analysedPaths'],
					['/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/..', '/Users/jonathan/O2O/symfony-services'],
					[
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheItemInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/KernelBrowser.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/KernelTestCase.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/TestContainer.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Command.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Helper/HelperInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/ChoiceList/Loader/ChoiceLoaderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/ContainerBuilder.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/Extension/ExtensionInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventDispatcherInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventSubscriberInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/GenericEvent.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/DataTransformerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormBuilderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeExtensionInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormView.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Cookie.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/HeaderBag.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/ParameterBag.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Session.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/StampInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/Envelope.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Process.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyPathInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/AclInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/EntryInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/ContextAwareDecoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/DecoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/EncoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareDenormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareNormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizableInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizableInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraint.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationListInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CacheInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CallbackInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/ItemInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Twig/Node/Node.stub',
					],
					'0',
					null,
					[
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
					],
					[],
					[],
					$fileReplacements,
					false
				);
			}
		};
	}


	public function createService036(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer(
			'/Users/jonathan/O2O/symfony-services/tmp/resultCache.php',
			'/Users/jonathan/O2O/symfony-services/tmp/resultCaches'
		);
	}


	public function createService037(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService038(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('039'),
			$this->getService('026'),
			$this->getService('035'),
			$this->getService('030'),
			50
		);
	}


	public function createService039(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('058'),
			$this->getService('028'),
			$this->getService('057'),
			$this->getService('060')
		);
	}


	public function createService040(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('055'),
			$this->getService('035'),
			$this->getService('036'),
			$this->getService('030'),
			$this->getService('060'),
			$this->getService('058'),
			$this->parameters['analysedPaths'],
			'/Users/jonathan/O2O/symfony-services',
			'/var/folders/j7/_dt004bs6nn9wff2qmmfdbmm0000gn/T/phpstan-fixer',
			32
		);
	}


	public function createService041(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('052'),
			$this->getService('reflectionProvider'),
			$this->getService('043')
		);
	}


	public function createService042(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('044'));
	}


	public function createService043(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0122'), $this->getService('010'));
	}


	public function createService044(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('043'));
	}


	public function createService045(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('046'));
	}


	public function createService046(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService047(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/jonathan/O2O/symfony-services',
			'/Users/jonathan/O2O/symfony-services/tmp',
			[
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/extension.neon',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/extension-installer/src/../../phpstan-symfony/rules.neon',
				'/Users/jonathan/O2O/symfony-services/phpstan.neon',
			],
			$this->parameters['analysedPaths'],
			['/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/..', '/Users/jonathan/O2O/symfony-services'],
			$this->parameters['analysedPathsFromConfig'],
			'0',
			null,
			null,
			$this->parameters['singleReflectionFile'],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createService048(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('045'));
	}


	public function createService049(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('045'));
	}


	public function createService050(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('045'));
	}


	public function createService051(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('045'));
	}


	public function createService052(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/jonathan/O2O/symfony-services');
	}


	public function createService053(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('054'), [], null);
	}


	public function createService054(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder(
					$this->container->getService('052'),
					$analyseExcludes,
					[
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
						'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheItemInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/KernelBrowser.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/KernelTestCase.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/TestContainer.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Command.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Helper/HelperInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/ChoiceList/Loader/ChoiceLoaderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/ContainerBuilder.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/Extension/ExtensionInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventDispatcherInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventSubscriberInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/GenericEvent.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/DataTransformerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormBuilderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeExtensionInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormView.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Cookie.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/HeaderBag.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/ParameterBag.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Session.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/StampInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/Envelope.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Process.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyPathInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/AclInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/EntryInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/ContextAwareDecoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/DecoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/EncoderInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareDenormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareNormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizableInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizableInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizerInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraint.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationListInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CacheInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CallbackInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/ItemInterface.stub',
						'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Twig/Node/Node.stub',
					]
				);
			}
		};
	}


	public function createService055(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService056(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService057(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 300.0, 134217728);
	}


	public function createService058(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService059(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService060(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService061(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $filename,
				?bool $isPure = null
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('059'),
					$this->container->getService('037'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure
				);
			}
		};
	}


	public function createService062(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService063(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService064(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService065(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('064'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService066(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('065'), true);
	}


	public function createService067(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('069'),
			$this->getService('070'),
			$this->getService('068')
		);
	}


	public function createService068(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('065'),
			$this->getService('fileFinderScan'),
			$this->getService('012')
		);
	}


	public function createService069(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('068'));
	}


	public function createService070(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('072'));
			}
		};
	}


	public function createService071(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('065'),
					$fileName
				);
			}
		};
	}


	public function createService072(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('071'));
	}


	public function createService073(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService074(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService075(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('031'),
			$this->getService('032'),
			$this->getService('076'),
			$this->getService('019'),
			$this->getService('062'),
			$this->getService('063'),
			$this->getService('085'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('079'),
			$this->getService('0122'),
			false,
			['stdClass']
		);
	}


	public function createService076(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure = null
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('059'),
					$this->container->getService('037'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure
				);
			}
		};
	}


	public function createService077(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService078(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass']
		);
	}


	public function createService079(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('045'));
	}


	public function createService080(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('085'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0122'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService081(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('025'));
	}


	public function createService082(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider($this->getService('081'), $this->getService('012'));
	}


	public function createService083(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('082'),
			$this->getService('065'),
			$this->getService('0122'),
			$this->getService('012')
		);
	}


	public function createService084(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('012'),
			$this->getService('082'),
			$this->getService('083')
		);
	}


	public function createService085(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('084')->create();
	}


	public function createService086(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService087(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('089')
		);
	}


	public function createService088(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0120'), false);
	}


	public function createService089(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService090(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('091'), true);
	}


	public function createService091(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService092(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver(
			$this->getService('reflectionProvider'),
			[],
			['Symfony\Component\Console\Exception\InvalidArgumentException'],
			[],
			[]
		);
	}


	public function createService093(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('095'));
	}


	public function createService094(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('095'));
	}


	public function createService095(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService096(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('098'));
	}


	public function createService097(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0122'), $this->getService('098'));
	}


	public function createService098(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService099(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0120'),
			$this->getService('0112'),
			$this->getService('012'),
			$this->getService('0115'),
			$this->getService('0118'),
			false,
			false,
			false,
			false
		);
	}


	public function createService0100(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			$this->getService('0115'),
			$this->getService('012'),
			false,
			true
		);
	}


	public function createService0101(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0120'));
	}


	public function createService0102(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0103(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0106'),
			false,
			['DatePeriod', 'CallbackFilterIterator', 'FilterIterator', 'RecursiveCallbackFilterIterator']
		);
	}


	public function createService0104(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0105(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			$this->getService('0104'),
			$this->getService('0123'),
			false
		);
	}


	public function createService0106(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0107(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0117'), $this->getService('0118'), false, true, true);
	}


	public function createService0108(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			false,
			false
		);
	}


	public function createService0109(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			$this->getService('089'),
			false,
			false
		);
	}


	public function createService0110(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0111(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			$this->getService('reflectionProvider'),
			true,
			false,
			false,
			false,
			['DatePeriod', 'CallbackFilterIterator', 'FilterIterator', 'RecursiveCallbackFilterIterator']
		);
	}


	public function createService0112(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0113(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('045'));
	}


	public function createService0114(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0115(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0116(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('045'));
	}


	public function createService0117(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0118(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0119(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('045'));
	}


	public function createService0120(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false, false);
	}


	public function createService0121(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0122(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('079'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('021'),
			$this->getService('020'),
			$this->getService('011'),
			$this->getService('052')
		);
	}


	public function createService0123(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('025'),
			$this->getService('023'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0124(): PHPStan\Type\TypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('045'));
	}


	public function createService0125(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0126(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0128(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0129(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0131(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0136(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0141(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0143(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0146(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0147(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0148(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0149(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0152(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0153(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0154(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0155(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('012'));
	}


	public function createService0156(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0157(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0158(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0160(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0161(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0162(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0163(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension;
	}


	public function createService0166(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0167(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0168(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTimeImmutable');
	}


	public function createService0171(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0174(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('012'));
	}


	public function createService0175(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0176(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0177(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0178(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0179(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0180(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('012'));
	}


	public function createService0181(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0125'));
	}


	public function createService0183(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0184(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0185(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0186(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0187(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0188(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0189(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0192(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0118'));
	}


	public function createService0193(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0197(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0125'));
	}


	public function createService0198(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0199(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0201(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('012'));
	}


	public function createService0203(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0204(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('012'));
	}


	public function createService0205(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0206(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0207(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0208(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0211(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0212(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0213(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0214(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0216(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension;
	}


	public function createService0217(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0219(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0220(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0221(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0222(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0224(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0225(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0226(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0227(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0228(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0229(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0230(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0231(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0232(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension(true);
	}


	public function createService0233(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0234(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0191'));
	}


	public function createService0235(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0236(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0237(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0238(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0239(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0245'));
	}


	public function createService0240(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0241(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0242(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0243(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0244(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0245'));
	}


	public function createService0245(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0246(): PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension;
	}


	public function createService0247(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0125')
		);
	}


	public function createService0248(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService0249(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0250(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0251(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('012'));
	}


	public function createService0252(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0255(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0256(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0257(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0258(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0259(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0260(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0261(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0262(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0266'),
			$this->getService('0267'),
			$this->getService('072'),
			$this->getService('069'),
			$this->getService('067'),
			$this->getService('066'),
			[],
			[],
			$this->parameters['analysedPaths'],
			['/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/..', '/Users/jonathan/O2O/symfony-services'],
			$this->parameters['analysedPathsFromConfig'],
			$this->parameters['singleReflectionFile'],
			[
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			],
			true
		);
	}


	public function createService0264(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_25f0d0d041 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('079'),
					$this->container->getService('048'),
					$reflector,
					$this->container->getService('0122'),
					$this->container->getService('019'),
					$this->container->getService('012'),
					$this->container->getService('080'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('061'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('011'),
					$this->container->getService('010'),
					$this->container->getService('052'),
					$this->container->getService('0266')
				);
			}
		};
	}


	public function createService0265(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('012')
		);
	}


	public function createService0266(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0265')->create();
	}


	public function createService0267(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0268(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule($this->getService('045'));
	}


	public function createService0269(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('089'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0270(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			false
		);
	}


	public function createService0271(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			false
		);
	}


	public function createService0272(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0273(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(false);
	}


	public function createService0274(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule($this->getService('012'), $this->getService('0110'), false);
	}


	public function createService0275(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, false);
	}


	public function createService0276(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			false
		);
	}


	public function createService0277(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			false
		);
	}


	public function createService0278(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(true);
	}


	public function createService0279(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			false,
			false
		);
	}


	public function createService0280(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			$this->getService('089')
		);
	}


	public function createService0281(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('089'),
			$this->getService('0115'),
			$this->getService('012'),
			false,
			true
		);
	}


	public function createService0282(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			$this->getService('012'),
			false,
			false
		);
	}


	public function createService0283(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule([]);
	}


	public function createService0284(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule(false, false);
	}


	public function createService0285(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0116'), []);
	}


	public function createService0286(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0120'),
			$this->getService('0117'),
			$this->getService('0118'),
			true
		);
	}


	public function createService0287(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0117'),
			$this->getService('0118'),
			$this->getService('0120'),
			true
		);
	}


	public function createService0288(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(false);
	}


	public function createService0289(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, false);
	}


	public function createService0290(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0291(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule([], $this->getService('reflectionProvider'), $this->getService('023'));
	}


	public function createService0292(): PHPStan\Symfony\Configuration
	{
		return new PHPStan\Symfony\Configuration([
			'container_xml_path' => null,
			'containerXmlPath' => null,
			'constant_hassers' => true,
			'constantHassers' => true,
			'console_application_loader' => null,
			'consoleApplicationLoader' => null,
		]);
	}


	public function createService0293(): PHPStan\Symfony\ConsoleApplicationResolver
	{
		return new PHPStan\Symfony\ConsoleApplicationResolver($this->getService('0292'));
	}


	public function createService0294(): PHPStan\Symfony\ServiceMap
	{
		return $this->getService('symfony.serviceMapFactory')->create();
	}


	public function createService0295(): PHPStan\Symfony\ParameterMap
	{
		return $this->getService('symfony.parameterMapFactory')->create();
	}


	public function createService0296(): PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension(
			'Symfony\Component\DependencyInjection\ContainerInterface',
			$this->getService('0292'),
			$this->getService('0294'),
			$this->getService('0295')
		);
	}


	public function createService0297(): PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension(
			'Psr\Container\ContainerInterface',
			$this->getService('0292'),
			$this->getService('0294'),
			$this->getService('0295')
		);
	}


	public function createService0298(): PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\Controller',
			$this->getService('0292'),
			$this->getService('0294'),
			$this->getService('0295')
		);
	}


	public function createService0299(): PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ServiceDynamicReturnTypeExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\AbstractController',
			$this->getService('0292'),
			$this->getService('0294'),
			$this->getService('0295')
		);
	}


	public function createService0300(): PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension(
			'Symfony\Component\DependencyInjection\ContainerInterface',
			$this->getService('010')
		);
	}


	public function createService0301(): PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension('Psr\Container\ContainerInterface', $this->getService('010'));
	}


	public function createService0302(): PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\Controller',
			$this->getService('010')
		);
	}


	public function createService0303(): PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\ServiceTypeSpecifyingExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\AbstractController',
			$this->getService('010')
		);
	}


	public function createService0304(): PHPStan\Type\Symfony\RequestDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\RequestDynamicReturnTypeExtension;
	}


	public function createService0305(): PHPStan\Type\Symfony\RequestTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\RequestTypeSpecifyingExtension;
	}


	public function createService0306(): PHPStan\Type\Symfony\InputBagDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\InputBagDynamicReturnTypeExtension;
	}


	public function createService0307(): PHPStan\Type\Symfony\HeaderBagDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\HeaderBagDynamicReturnTypeExtension;
	}


	public function createService0308(): PHPStan\Type\Symfony\SerializerDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\SerializerDynamicReturnTypeExtension(
			'Symfony\Component\Serializer\SerializerInterface',
			'deserialize'
		);
	}


	public function createService0309(): PHPStan\Type\Symfony\SerializerDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\SerializerDynamicReturnTypeExtension(
			'Symfony\Component\Serializer\Normalizer\DenormalizerInterface',
			'denormalize'
		);
	}


	public function createService0310(): PHPStan\Type\Symfony\EnvelopeReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\EnvelopeReturnTypeExtension;
	}


	public function createService0311(): PHPStan\Type\Symfony\InputInterfaceGetArgumentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\InputInterfaceGetArgumentDynamicReturnTypeExtension($this->getService('0293'));
	}


	public function createService0312(): PHPStan\Type\Symfony\ArgumentTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\ArgumentTypeSpecifyingExtension($this->getService('010'));
	}


	public function createService0313(): PHPStan\Type\Symfony\InputInterfaceHasArgumentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\InputInterfaceHasArgumentDynamicReturnTypeExtension($this->getService('0293'));
	}


	public function createService0314(): PHPStan\Type\Symfony\InputInterfaceGetOptionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\InputInterfaceGetOptionDynamicReturnTypeExtension($this->getService('0293'));
	}


	public function createService0315(): PHPStan\Type\Symfony\OptionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\OptionTypeSpecifyingExtension($this->getService('010'));
	}


	public function createService0316(): PHPStan\Type\Symfony\InputInterfaceHasOptionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\InputInterfaceHasOptionDynamicReturnTypeExtension($this->getService('0293'));
	}


	public function createService0317(): PHPStan\Type\Symfony\Config\ArrayNodeDefinitionPrototypeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\ArrayNodeDefinitionPrototypeDynamicReturnTypeExtension;
	}


	public function createService0318(): PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension(
			'Symfony\Component\Config\Definition\Builder\ExprBuilder',
			['end']
		);
	}


	public function createService0319(): PHPStan\Type\Symfony\Config\PassParentObjectDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\PassParentObjectDynamicReturnTypeExtension(
			'Symfony\Component\Config\Definition\Builder\NodeBuilder',
			['arrayNode', 'scalarNode', 'booleanNode', 'integerNode', 'floatNode', 'enumNode', 'variableNode']
		);
	}


	public function createService0320(): PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension(
			'Symfony\Component\Config\Definition\Builder\NodeBuilder',
			['end']
		);
	}


	public function createService0321(): PHPStan\Type\Symfony\Config\PassParentObjectDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\PassParentObjectDynamicReturnTypeExtension(
			'Symfony\Component\Config\Definition\Builder\NodeDefinition',
			['children', 'validate', 'beforeNormalization']
		);
	}


	public function createService0322(): PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\ReturnParentDynamicReturnTypeExtension(
			'Symfony\Component\Config\Definition\Builder\NodeDefinition',
			['end']
		);
	}


	public function createService0323(): PHPStan\Type\Symfony\Config\TreeBuilderDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\TreeBuilderDynamicReturnTypeExtension;
	}


	public function createService0324(): PHPStan\Type\Symfony\Config\TreeBuilderGetRootNodeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Config\TreeBuilderGetRootNodeDynamicReturnTypeExtension;
	}


	public function createService0325(): PHPStan\Type\Symfony\KernelInterfaceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\KernelInterfaceDynamicReturnTypeExtension;
	}


	public function createService0326(): PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension(
			'Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface',
			'get',
			'has',
			$this->getService('0292'),
			$this->getService('0295'),
			$this->getService('025')
		);
	}


	public function createService0327(): PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension(
			'Symfony\Component\DependencyInjection\ContainerInterface',
			'getParameter',
			'hasParameter',
			$this->getService('0292'),
			$this->getService('0295'),
			$this->getService('025')
		);
	}


	public function createService0328(): PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\AbstractController',
			'getParameter',
			null,
			$this->getService('0292'),
			$this->getService('0295'),
			$this->getService('025')
		);
	}


	public function createService0329(): PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ParameterDynamicReturnTypeExtension(
			'Symfony\Bundle\FrameworkBundle\Controller\Controller',
			'getParameter',
			null,
			$this->getService('0292'),
			$this->getService('0295'),
			$this->getService('025')
		);
	}


	public function createService0330(): PHPStan\Symfony\InputBagStubFilesExtension
	{
		return new PHPStan\Symfony\InputBagStubFilesExtension;
	}


	public function createService0331(): PHPStan\Type\Symfony\Form\FormInterfaceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\Form\FormInterfaceDynamicReturnTypeExtension;
	}


	public function createService0332(): PHPStan\Type\Symfony\CommandGetHelperDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\CommandGetHelperDynamicReturnTypeExtension($this->getService('0293'));
	}


	public function createService0333(): PHPStan\Type\Symfony\ResponseHeaderBagDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Symfony\ResponseHeaderBagDynamicReturnTypeExtension;
	}


	public function createService0334(): PHPStan\Type\Symfony\InputBagTypeSpecifyingExtension
	{
		return new PHPStan\Type\Symfony\InputBagTypeSpecifyingExtension;
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\BetterReflection\Reflector\ClassReflector
	{
		return new PHPStan\BetterReflection\Reflector\ClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\BetterReflection\Reflector\ConstantReflector
	{
		return new PHPStan\BetterReflection\Reflector\ConstantReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\BetterReflection\Reflector\FunctionReflector
	{
		return new PHPStan\BetterReflection\Reflector\FunctionReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('079'),
			$this->getService('048'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0122'),
			$this->getService('019'),
			$this->getService('012'),
			$this->getService('080'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('061'),
			$this->getService('relativePathHelper'),
			$this->getService('011'),
			$this->getService('010'),
			$this->getService('052'),
			$this->getService('0266')
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0263')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('045'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/jonathan/O2O/symfony-services/tmp/cache/PHPStan');
	}


	public function createServiceContainer(): Container_25f0d0d041
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('currentPhpVersionLexer'),
			$this->getService('03'),
			$this->getService('045')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('012'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true, null);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('092');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('053')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('053')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('052'), ['php', 'php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('052'), ['php', 'php']);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('079'),
			$this->getService('048'),
			$this->getService('061'),
			$this->getService('0122'),
			$this->getService('019'),
			$this->getService('012'),
			$this->getService('080'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0266')
		);
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/jonathan/O2O/symfony-services');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('052'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->parameters['singleReflectionFile']
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return new PhpParser\Lexer\Emulative;
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			true
		);
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('0119')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/jonathan/O2O/symfony-services',
			$this->parameters['analysedPaths']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('010'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Arrays\EmptyArrayItemRule
	{
		return new PHPStan\Rules\Arrays\EmptyArrayItemRule;
	}


	public function createServiceRules__12(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__13(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('012'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('087'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('087'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			$this->getService('089'),
			$this->getService('012')
		);
	}


	public function createServiceRules__17(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__18(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule;
	}


	public function createServiceRules__19(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('089'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__2(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('089'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__21(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('089'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__22(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('089'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__23(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('089')
		);
	}


	public function createServiceRules__24(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createServiceRules__25(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('012'));
	}


	public function createServiceRules__26(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__27(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createServiceRules__28(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createServiceRules__29(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('012'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__30(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('087'));
	}


	public function createServiceRules__31(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('012'));
	}


	public function createServiceRules__32(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('087'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0112'));
	}


	public function createServiceRules__34(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('099')
		);
	}


	public function createServiceRules__35(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('087'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('012'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('0100'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0100'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0100'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__40(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('087'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__42(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('087'));
	}


	public function createServiceRules__43(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('012'));
	}


	public function createServiceRules__44(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0112'));
	}


	public function createServiceRules__45(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createServiceRules__46(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__47(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0108'), $this->getService('099'));
	}


	public function createServiceRules__48(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0109'), $this->getService('099'));
	}


	public function createServiceRules__49(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0100'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__50(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0108'), $this->getService('012'));
	}


	public function createServiceRules__51(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__52(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('087'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0109'), $this->getService('012'));
	}


	public function createServiceRules__54(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0112'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0279'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0280'));
	}


	public function createServiceRules__57(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('087'));
	}


	public function createServiceRules__58(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('012'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__6(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('086'));
	}


	public function createServiceRules__60(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createServiceRules__61(): PHPStan\Rules\Symfony\ContainerInterfacePrivateServiceRule
	{
		return new PHPStan\Rules\Symfony\ContainerInterfacePrivateServiceRule($this->getService('0294'));
	}


	public function createServiceRules__62(): PHPStan\Rules\Symfony\ContainerInterfaceUnknownServiceRule
	{
		return new PHPStan\Rules\Symfony\ContainerInterfaceUnknownServiceRule($this->getService('0294'), $this->getService('010'));
	}


	public function createServiceRules__63(): PHPStan\Rules\Symfony\UndefinedArgumentRule
	{
		return new PHPStan\Rules\Symfony\UndefinedArgumentRule($this->getService('0293'), $this->getService('010'));
	}


	public function createServiceRules__64(): PHPStan\Rules\Symfony\InvalidArgumentDefaultValueRule
	{
		return new PHPStan\Rules\Symfony\InvalidArgumentDefaultValueRule;
	}


	public function createServiceRules__65(): PHPStan\Rules\Symfony\UndefinedOptionRule
	{
		return new PHPStan\Rules\Symfony\UndefinedOptionRule($this->getService('0293'), $this->getService('010'));
	}


	public function createServiceRules__66(): PHPStan\Rules\Symfony\InvalidOptionDefaultValueRule
	{
		return new PHPStan\Rules\Symfony\InvalidOptionDefaultValueRule;
	}


	public function createServiceRules__7(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('086'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('086'));
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0266'),
			[
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/jonathan/O2O/symfony-services');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('defaultAnalysisParser'),
			$this->getService('0122'),
			$this->getService('045'),
			[
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheItemInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/KernelBrowser.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/KernelTestCase.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/TestContainer.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Command.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Helper/HelperInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/ChoiceList/Loader/ChoiceLoaderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/ContainerBuilder.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/Extension/ExtensionInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventDispatcherInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventSubscriberInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/GenericEvent.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/DataTransformerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormBuilderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeExtensionInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormView.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Cookie.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/HeaderBag.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/ParameterBag.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Session.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/StampInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/Envelope.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Process.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyPathInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/AclInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/EntryInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/ContextAwareDecoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/DecoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/EncoderInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareDenormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareNormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizableInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizableInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizerInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraint.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationListInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CacheInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CallbackInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/ItemInterface.stub',
				'/Users/jonathan/O2O/symfony-services/vendor/phpstan/phpstan-symfony/stubs/Twig/Node/Node.stub',
			]
		);
	}


	public function createServiceSymfony__parameterMapFactory(): PHPStan\Symfony\ParameterMapFactory
	{
		return new PHPStan\Symfony\XmlParameterMapFactory($this->getService('0292'));
	}


	public function createServiceSymfony__serviceMapFactory(): PHPStan\Symfony\ServiceMapFactory
	{
		return new PHPStan\Symfony\XmlServiceMapFactory($this->getService('0292'));
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('045'));
	}


	public function initialize()
	{
	}
}
