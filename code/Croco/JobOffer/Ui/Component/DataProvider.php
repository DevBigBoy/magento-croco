<?php
//declare(strict_types=1);
//
//namespace Croco\JobOffer\Ui\Component;
//
//use Magento\Framework\Api\Filter;
//use Magento\Framework\Api\FilterBuilder;
//use Magento\Framework\Api\Search\SearchCriteriaBuilder;
//use Magento\Framework\App\ObjectManager;
//use Magento\Framework\App\RequestInterface;
//use Magento\Framework\AuthorizationInterface;
//use Magento\Framework\View\Element\UiComponent\DataProvider\Reporting;
//
///**
// * DataProvider for cms ui.
// */
//class DataProvider extends \Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider
//{
//
//    /**
//     * @var AddFilterInterface[]
//     */
//    private $additionalFilterPool;
//
//    /**
//     * @param string $name
//     * @param string $primaryFieldName
//     * @param string $requestFieldName
//     * @param Reporting $reporting
//     * @param SearchCriteriaBuilder $searchCriteriaBuilder
//     * @param RequestInterface $request
//     * @param FilterBuilder $filterBuilder
//     * @param array $meta
//     * @param array $data
//     * @param array $additionalFilterPool
//     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
//     */
//    public function __construct(
//        $name,
//        $primaryFieldName,
//        $requestFieldName,
//        Reporting $reporting,
//        SearchCriteriaBuilder $searchCriteriaBuilder,
//        RequestInterface $request,
//        FilterBuilder $filterBuilder,
//        array $meta = [],
//        array $data = [],
//        array $additionalFilterPool = []
//    )
//    {
//        parent::__construct(
//            $name,
//            $primaryFieldName,
//            $requestFieldName,
//            $reporting,
//            $searchCriteriaBuilder,
//            $request,
//            $filterBuilder,
//            $meta,
//            $data
//        );
//
//        $this->additionalFilterPool = $additionalFilterPool;
//    }
//
//
//    /**
//     * @inheritdoc
//     */
//    public function addFilter(Filter $filter)
//    {
//        if (!empty($this->additionalFilterPool[$filter->getField()])) {
//            $this->additionalFilterPool[$filter->getField()]->addFilter($this->searchCriteriaBuilder, $filter);
//        } else {
//            parent::addFilter($filter);
//        }
//    }
//}
